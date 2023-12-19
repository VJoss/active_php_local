<?php
require_once('./constants.php');
/**
 *  get DB, returns a PDO object
 */

function getDb(){
    try{
        $db = new PDO(
            "mysql:host=".HOST.":".PORT.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    }catch(PDOException $e){
        print($e->getMessage());
    }

    return $db;
}