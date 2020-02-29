<?php 
require_once('../inc/init.php');

//Si j'ai une action GET égal à supprimer avec en paramètre $_GET[id_client]
//je supprime le client en base

if(isset($_GET["action"]) && $_GET["action"] == "supprimer"){
    $pdo->query("DELETE FROM clients WHERE id_client = '$_GET[id_client]'");
    $content .= "<div class='alert alert-success' role='alert'> Le client a bien été supprimé!</div>";
}

//---------------------------------------------------------//

// je récupère en base tous les clients pour les afficher
$r = $pdo->query("SELECT id_client, first_name, last_name, address, postal_code, telephone, siret, sexe  FROM clients");

$content .= "<table class='table'>";
$content .= "<thead> <tr>";
// Ici je récupère les noms des columns pour les afficher dynamiquement
for ($i=0; $i < $r->columnCount(); $i++) {
    $column = $r->getColumnMeta($i);
    $content .= "<th>$column[name]</th>";
}


$content .= "<th> modification </th>";
$content .= "<th> suppression </th>";
$content .= "</tr> </thead>";
$content .= "<tbody>";

// Ici j'itère dans les différentes données pour alimenter mon tableau dynamiquement
while($clients = $r->fetch(PDO::FETCH_ASSOC)) {
    $content .= "<tr>";
    foreach($clients as $key => $value) {
        
            $content .= "<td> $value </td>";
        }
    $content .= "<td> <a href=\"gestion_clients.php?action=modifier&id_client=$clients[id_client]\"> Modifier </a> </td>";
    $content .= "<td> <a href=\"?action=supprimer&id_client=$clients[id_client]\"> Supprimer </a> </td>";
    $content .= "</tr>";

        }


    $content .= " </tbody></table>";

?>

<!-- ------------------------------------------------------------------------------ -->
<?php require_once('header.php');

echo $content;

?>


<?php require_once('footer.php'); ?>      