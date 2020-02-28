<?php 
require_once('../inc/init.php');

//Si j'ai une action GET égal à supprimer avec en paramètre $_GET[id_vehicule]
//je supprime le vehicule en base

if(isset($_GET["action"]) && $_GET["action"] == "supprimer"){
    $pdo->query("DELETE FROM cars WHERE id_car = '$_GET[id_car]'");
    $content .= "<div class='alert alert-success' role='alert'>Le véhicule a bien été supprimé!</div>";
}


//------------------------------------------------------------------//


// je récupère en base tous les véhicules pour les afficher
$r = $pdo->query("SELECT id_car, brand_car, model_car, motor, gearbox, cv_car,ch_car, first_registration_car, km FROM cars");

$content .= "<table class='table'>";
$content .= "<tr>";
// Ici je récupère les noms des columns pour les afficher dynamiquement
for ($i=0; $i < $r->columnCount(); $i++) {
    $column = $r->getColumnMeta($i);
    $content .= "<th>$column[name]</th>";
}


$content .= "<th> modification </th>";
$content .= "<th> suppression </th>";
$content .= "<th> facture </th></tr>";

// Ici j'itère dans les différentes données pour alimenter mon tableau dynamiquement
while($cars = $r->fetch(PDO::FETCH_ASSOC)) {
    $content .= "<tr>";
    foreach($cars as $key => $value) {
        
            $content .= "<td> $value </td>";
        }
    $content .= "<td> <a href=\"gestion_vehicules.php?action=modifier&id_car=$cars[id_car]\"> Modifier </a> </td>";
    $content .= "<td> <a href=\"?action=supprimer&id_car=$cars[id_car]\"> Supprimer </a> </td>";
    $content .= "<td> <a href=\"?action=facture&id_car=$cars[id_car]\"> Editer </a> </td>";
    $content .= "</tr>";

        }

    $content .= "</table>";


?>

<!-- ------------------------------------------------------------------------------ -->
<?php require_once('header.php');

echo $content;

?>


<?php require_once('footer.php'); ?>      