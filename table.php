<?php
require_once('./constants.php');
require_once('./generic_requests.php');
$db = getDb();
// Validation et nettoyage du nom de la table
if (isset($_GET['table'])) {
    $tableName = $_GET['table'];
    
    $hashedTableName = generateHashedTableName($tableName);

        switch ($hashedTableName) { 
            case md5(COLLABORATEUR_TABLE_NAME):
                $titleName = COLLABORATEUR_TABLE_LABEL;
                $tableLabel = COLLABORATEUR_LABEL_NAME;
                $touteTable = queryAll($db,COLLABORATEUR_TABLE_NAME);
                break;
            case md5(CLIENT_TABLE_NAME):
                $titleName = CLIENT_TABLE_LABEL;
                $tableLabel = CLIENT_LABEL_NAME;
                $touteTable = queryAll($db,CLIENT_TABLE_NAME);
                break;
            case md5(PROJET_TABLE_NAME):
                $titleName = PROJET_TABLE_LABEL;
                $tableLabel = PROJET_LABEL_NAME;
                $touteTable = queryAll($db,PROJET_TABLE_NAME);
                break;
            case md5(DOCUMENT_TABLE_NAME):
                $titleName = DOCUMENT_TABLE_LABEL;
                $tableLabel = DOCUMENT_LABEL_NAME;
                $touteTable = queryAll($db,DOCUMENT_TABLE_NAME);
                break;
            case md5(INTERVENTION_TABLE_NAME):
                $titleName = INTERVENTION_TABLE_LABEL;
                $tableLabel= INTERVENTION_LABEL_NAME;
                $touteTable = queryAll($db,INTERVENTION_TABLE_NAME);
                break;
            case md5(ETAPE_TABLE_NAME):
                $titleName = ETAPE_TABLE_LABEL;
                $tableLabel = ETAPE_LABEL_NAME;
                $touteTable = queryAll($db,ETAPE_TABLE_NAME);
                break;
            case md5(FONCTION_TABLE_NAME):
                $titleName = FONCTION_TABLE_LABEL;
                $tableLabel = FONCTION_LABEL_NAME;
                $touteTable = queryAll($db, FONCTION_TABLE_NAME);
                break;
            case md5(CONTRAT_TABLE_NAME):
                $titleName = CONTRAT_TABLE_LABEL;
                $tableLabel = CONTRAT_LABEL_NAME;
                $touteTable = queryAll($db, CONTRAT_TABLE_NAME);
                break;
            case md5(CONTACT_TABLE_NAME):
                $titleName = CONTACT_TABLE_LABEL;
                $tableLabel = CONTACT_LABEL_NAME;
                $touteTable = queryAll($db, CONTACT_TABLE_NAME);
                break;
            default:
            header("HTTP/1.0 404 Not Found");
            echo "Table non reconnue";
            break;
    }
} else {
    echo "Le paramètre 'table' est manquant.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\TD_active.css" type="text/css">
    <title><?= $titleName ?></title>
</head>
  <body>
          <table>
              <thead>
                    <tr>
                         <?php
                        print("<p class='page-title'>$titleName</p>");
                        foreach($tableLabel as $label){
                        print("<th>$label</th>");
                        }
                        ?>
                    </tr>
                    <ul>
            <li><a href= "./index.php"> Index</a></li>
              </thead>
                  <tbody>
                    <?php 
                    foreach ($touteTable as $tableDetails) {
                        print("<tr></tr>");
                    foreach($tableDetails as $key){
                        print("<td class='contenu'>$key</td>");
                    }
                    print("</tr>");
                    }  
                    ?>
            </table>
                    </tbody>
    </body>
</html>
