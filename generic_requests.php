<?php
require_once('./db.php');
require_once('./constants.php');


function queryAll($db, $tableName, $fieldName = null){
    //  "SELECT monChamps FROM maTable"
    //  
    if ($fieldName === null) {
        $fieldName = "*";
    }
    $sql = "SELECT $fieldName FROM $tableName";
    $request = $db->prepare($sql);
    // $request->bindValue(':tableName', $tableName);
    $request->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function generateHashedTableName($tableName) {
    return md5($tableName); // Utilisez une fonction de hachage appropriée
}