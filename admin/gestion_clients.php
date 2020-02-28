<?php 
require_once('../inc/init.php');

//Si j'ai une action GET égal à supprimer avec en paramètre $_GET[id_client]
//je supprime le client en base

if(isset($_GET["action"]) && $_GET["action"] == "modifier"){
    $r = $pdo->query("SELECT * FROM clients WHERE id_client= '$_GET[id_client]'");
    $client_actuel = $r->fetch(PDO::FETCH_ASSOC);
}

if($_POST){

    // Si c'est une modification je fait un update en bdd

    if(isset($_GET["action"]) && $_GET["action"] == "modifier"){
        $r = $pdo->query("UPDATE clients SET first_name = '$_POST[first_name]', last_name = '$_POST[last_name]', address = '$_POST[address]', postal_code = '$_POST[postal_code]', city = '$_POST[city]', telephone = '$_POST[telephone]', type = '$_POST[type]', siret = '$_POST[siret]', date_of_birth = '$_POST[date_of_birth]', place_of_birth = '$_POST[place_of_birth]', sexe = '$_POST[sexe]' WHERE id_client = '$_POST[id_client]'");

        $id_client = $r->rowCount();

        if($id_client >=1 ){
            $content .= "<div class='alert alert-success' role='alert'>Le client a bien été modifié!</div>";
        }



    }else{ // Si c'est un ajout je fais un insert en base
            $r = $pdo->query("INSERT INTO clients (first_name, last_name, address, postal_code, city, telephone, type, siret, date_of_birth, place_of_birth, sexe)
    VALUES('$_POST[first_name]', '$_POST[last_name]', '$_POST[address]', '$_POST[postal_code]', '$_POST[city]', '$_POST[telephone]', '$_POST[type]','$_POST[siret]', '$_POST[date_of_birth]','$_POST[place_of_birth]', '$_POST[sexe]')");

            // Je récupère le dernier ID inséré
    $id_client = $pdo->lastInsertId();
    echo $id_client;

    if($id_client>=1){
        $content .= "<div class='alert alert-success' role='alert'>
      Le client a bien été ajouté !</div>";
    }
    }

}

// ICI si je suis dans le cadre d'une modification
//     je récupère et j'affiche les donées actuellement en base
//     Sinon c'est que je suis dans le cadre d'un ajout et donc j'initialise 
//     les champs avec du vide
//     // chaque variable définie ci-dessous fait l'objet d"un echo dans la value d"un input
$id_client = (isset($client_actuel['id_client'])) ? $client_actuel['id_client'] : '';
$first_name = (isset($client_actuel['first_name'])) ? $client_actuel['first_name'] : '';
$last_name = (isset($client_actuel['last_name'])) ? $client_actuel['last_name'] : '';
$address = (isset($client_actuel['address'])) ? $client_actuel['address'] : '';
$postal_code = (isset($client_actuel['postal_code'])) ? $client_actuel['postal_code'] : '';
$city = (isset($client_actuel['city'])) ? $client_actuel['city'] : '';
$telephone = (isset($client_actuel['telephone'])) ? $client_actuel['telephone'] : '';
$type = (isset($client_actuel['type'])) ? $client_actuel['type'] : '';
$siret = (isset($client_actuel['siret'])) ? $client_actuel['siret'] : '';
$date_of_birth = (isset($client_actuel['date_of_birth'])) ? $client_actuel['date_of_birth'] : '';
$place_of_birth = (isset($client_actuel['place_of_birth'])) ? $client_actuel['place_of_birth'] : '';
$sexe = (isset($client_actuel['sexe'])) ? $client_actuel['sexe'] : '';

?>

<!-- ------------------------------------------------------------------------------ -->
<?php require_once('header.php');

echo $content;

?>
    </br>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id_client" value="<?=$id_client?>">
        
        <div class ="row justify-content-center">
        <div class ="col-md-10">
        <div class="row">
            <div class="col">
                <label for="first_name"> prénom </label>
                <input type="text" name="first_name" placeholder="prénom" id="first_name" class="form-control" value="<?=$first_name?>"><br>
            </div>

            <div class="col">
                <label for="last_name">nom de famille</label>
                <input type="text" name="last_name" placeholder="nom de famille" id="last_name" class="form-control" value="<?=$last_name?>"><br>
            </div>
        </div>

        
        <div class="row">
            <div class="col">
                <label for="address">adresse</label>
                <input type="text" name="address" placeholder="adresse" id="address" class="form-control" value="<?=$address?>"><br>
            </div>

            <div class="col">
                <label for="postal_code">code postal</label>
                <input type="text" name="postal_code" placeholder="code postal" id="postal_code" class="form-control" value="<?=$postal_code?>"><br>
            </div>


            <div class="col">
                <label for="city"> ville </label>
                <input type="text" name="city" placeholder="ville" id="city" class="form-control" value="<?=$city?>"><br>
            </div>
        </div>    


        <div class="row">
            <div class="col">
                <label for="telephone"> téléphone </label>
                <input type="text" name="telephone" placeholder="téléphone" id="telephone" class="form-control" value="<?=$telephone?>"><br>
            </div>

    
            <div class="col">
                <label for="type">type</label>
                <select name="type" id="type" class="form-control">
                    <option <?php if($type == '0') echo 'selected'; ?>>0</option>
                    <option <?php if($type == '1') echo 'selected'; ?>>1</option>
                </select><br>
            </div>

            <div class="col">
                <label for="siret"> siret </label>
                <input type="text" name="siret" placeholder="siret" id="siret" class="form-control" value="<?=$siret?>"><br>
            </div>  
        </div>  
            

        <div class="row">
            <div class="col">
                <label for="date_of_birth"> date de naissance </label>
                <input type="date" name="date_of_birth" placeholder="date de naissance" id="date_of_birth" class="form-control" value="<?=$date_of_birth?>"><br>
            </div>

    
            <div class="col">
                <label for="place_of_birth"> lieu de naissance </label>
                <input type="text" name="place_of_birth" placeholder="lieu de naissance" id="place_of_birth" class="form-control" value="<?=$place_of_birth?>"><br>
            </div>

    
            <div class="col">
                <label for="sexe">sexe</label>
                <select name="sexe" id="sexe" class="form-control">
                    <option value="m" <?php if($public == 'm') echo 'selected'; ?>>Homme</option>
                    <option value="f" <?php if($public == 'f') echo 'selected'; ?>>Femme</option>
                    <option value="mixte" <?php if($public == 'mixte') echo 'selected'; ?>>Mixte</option>
                </select><br>
            </div>
        </div>

         
        <br>
        <div class="text-center";> 
        <input type="submit" value="enregistrer le client" class="btn btn btn-primary">
        </div>
        </form>
    
    </div>
    </div> 

</br>

<?php require_once('footer.php'); ?>      