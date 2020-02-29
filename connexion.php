 	<?php
	require_once("inc/init.php");
	require_once("inc/header.php");
ini_set('display_errors', 1); 

//TEST BASE MEMBRE
// $req=$pdo->query('SELECT * FROM membre');
// $membre=$req->fetch();
// var_dump($membre);

$r = $pdo->query("SELECT * FROM membre");
$clients = $r->fetch(PDO::FETCH_ASSOC);
// var_dump($clients);
if($_POST){
	$erreur = "";
	foreach ($_POST as $indice => $valeur) {
		$_POST[$indice] = addslashes($valeur);
	}
	if($_POST['pseudo']=="admin" && $_POST['mdp']==="admin"){
	// header("location:index.php");
	
	$content = '<li style ="list-style: none"; class="text-center mb-5"><a href="admin/index.php"> <strong> ENTREZ DANS LE BACKOFFICE </strong> </a></li>';
	}

$content .= $erreur;
}


?>

<h1> se connecter au Backoffice </h1>

<form method="post" action="connexion.php">
	<div>
		<input type="text" name="pseudo" placeholder="votre pseudo" id="pseudo" class="form-control">
	</div>
	<br>
	<div>
		<input type="password" name="mdp" placeholder="votre mdp" id="mdp" class="form-control">
	</div>
	<br>
	<div>
		<input type="submit" class="btn btn-default" value="se connecter">
	</div>
</form>





<?php 

	echo $content;


require_once("inc/footer.php"); ?>