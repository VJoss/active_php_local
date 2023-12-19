<?php

require_once('./constants.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TD Active</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Roughly 155 characters">
    <link rel="stylesheet" href=".\TD_active.css" type="text/css">

  </head>
    <body>
    <ul>
            <li><a href= <?php echo "./table.php?table=". CLIENT_TABLE_NAME?> >Clients</a></li>
            <li><a href= <?php echo "./table.php?table=". COLLABORATEUR_TABLE_NAME?> >Collaborateurs</a></li>
            <li><a href= <?php echo "./table.php?table=". PROJET_TABLE_NAME?> >Projets</a></li>
            <li><a href= <?php echo "./table.php?table=". ETAPE_TABLE_NAME?> >Étapes</a></li>
            <li><a href= <?php echo "./table.php?table=". DOCUMENT_TABLE_NAME?> >Documents</a></li>
            <li><a href= <?php echo "./table.php?table=". INTERVENTION_TABLE_NAME?> >Interventions</a></li>
<<<<<<< HEAD
            <li><a href= <?php echo "./table.php?table=". CONTRAT_TABLE_NAME?> >Contrats</a></li>
            <li><a href= <?php echo "./table.php?table=". CONTACT_TABLE_NAME?> >Contacts</a></li>
            <li><a href= <?php echo "./table.php?table=". FONCTION_TABLE_NAME?> >Fonctions</a></li>

=======
>>>>>>> edeb6c8b3444167c66bf1e0b5fa174667a471db3
        </ul>
    </body>
</html>
