
<?php


 include_once("inc/header.php");


//vérifier que j'ai bien récupéré un produit sinon, retour vers index.php
if(!isset($_GET["id_car"])){
	header("location:_index.php");
	exit();
}

if(isset($_GET["id_car"])){

$r = $pdo->query("SELECT * FROM cars WHERE id_car = $_GET[id_car]");

while($cars = $r->fetch(PDO::FETCH_ASSOC)){
$content .= "<div class=\"row d-flex align-content-end\">";
$content .= "<p><img  class=\"img-fluid\" src=\"$cars[imgs]\"> </p>";

$content .= "<div class=\"col-md-12\">";
$content .="<h1>Véhicule </h1>";
$content .= "<p> marque :  $cars[brand_car] </p>";
$content .= "<p> modèle :  $cars[model_car] </p>";
$content .= "<p> boite de vitesse : $cars[gearbox] </p>";
$content .= "<p> moteur :  $cars[type_car] </p>";
$content .= "<p> numéro de série :  $cars[series_car_number] </p>";
$content .= "<p> 1er enregistrepment de la voiture :  $cars[first_registration_car] </p>";
$content .= "<p> chevaux fiscaux :  $cars[cv_car] </p>";
$content .= "<p> chevaux puissance :  $cars[ch_car] </p>";
$content .= "<p> energie :  $cars[car_energy] </p>";
$content .= "<p> immatriculation :  $cars[plate_number] </p>";
$content .= "<p> kilometrage :  $cars[km] </p>";
$content .= "<p> nombre de clé :  $cars[number_key] </p>";
$content .= "<p> couleur extérieure :  $cars[ext_color] </p>";
$content .= "<p> couleur intérieure :  $cars[in_color] </p>";
$content .= "<p> informations complémentaires :  $cars[global_information] </p>";
$content .= "<p> options :  $cars[options] </p>";

$content .= "<p> prix de vente :  $cars[selling_price] </p>";
$content .= "<p> status :  $cars[status] </p>";
$content .= "<p> origine :  $cars[origin] </p>";
$content .= "<br> <br>";



if($cars['availability']=="1"){
	$content .= "<p>Indisponible à la vente, en rupture de stock</p>";
}else{
	$content .= "<p>voiture disponible <a href='contact.php'> Contactez-nous </p>  ";
}
}


$content .= "<br> <br>";

echo $content; 
}



require_once("inc/footer.php");

?>