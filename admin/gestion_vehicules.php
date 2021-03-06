<?php 
require_once('../inc/init.php');


if(isset($_GET["action"]) && $_GET["action"] == "modifier"){
    $r = $pdo->query("SELECT * FROM cars WHERE id_car= '$_GET[id_car]'");
    $car_actuel = $r->fetch(PDO::FETCH_ASSOC);
}


// Si je suis dans le cadre d'une modification/ ou d'un ajout
// alors je mets à jour les donnéés récupérées depuis le POST
if($_POST){


    // Si c'est une modification je fait un update en bdd

     if(isset($_GET["action"]) && $_GET["action"] == "modifier"){
        $pdo->query("UPDATE cars SET brand_car ='$_POST[brand_car]', model_car = '$_POST[model_car]', gearbox ='$_POST[gearbox]', motor =
        '$_POST[motor]',type_car = '$_POST[type_car]',series_car_number = '$_POST[series_car_number]', first_registration_car = '$_POST[first_registration_car]', cv_car =
        '$_POST[cv_car]',ch_car = '$_POST[ch_car]', car = '$_POST[car_energy]', plate_number = 
        '$_POST[plate_number]', km = '$_POST[km]',  number_key ='$_POST[number_key]',
         ext_color ='$_POST[ext_color]',  in_color ='$_POST[in_color]', global_information =
        '$_POST[global_information]', options = '$_POST[options]', imgs = 
        '$imgs_bdd',selling_price =  '$_POST[selling_price]',price_letters ='$_POST[price_letters]', purchase_price ='$_POST[purchase_price]', purchase_commission_price =
        '$_POST[purchase_commission_price]', status =  '$_POST[status]', old_selling_price =
        '$_POST[old_selling_price]', year ='$_POST[year]', police_number = '$_POST[police_number]', provider =
        '$_POST[provider]', purchase_date = '$_POST[purchase_date]', origin = '$_POST[origin]',  availability = '$_POST[availability]'WHERE id_car = '$_POST[id_car]'");
        
        $id_car = $r->rowCount();

        if($id_car >=1 ){
            $content .= "<div class='alert alert-success' role='alert'>Le véhicule a bien été modifié!</div>";
        }


    }else{ // Si c'est un ajout je fais un insert en base
            $r = $pdo->query("INSERT INTO cars (brand_car, model_car, gearbox, motor, type_car, series_car_number, first_registration_car, cv_car,ch_car, car_energy, plate_number, number_key, ext_color, in_color, global_information, options, imgs, selling_price, price_letters, purchase_price, purchase_commission_price, status, old_selling_price, year, km, police_number, provider, purchase_date, origin, availability)
    VALUES('$_POST[brand_car]', '$_POST[model_car]', '$_POST[gearbox]', '$_POST[motor]', '$_POST[type_car]', '$_POST[series_car_number]', '$_POST[first_registration_car]','$_POST[cv_car]', '$_POST[ch_car]','$_POST[car_energy]','$_POST[plate_number]', '$_POST[number_key]', '$_POST[ext_color]', '$_POST[in_color]', '$_POST[global_information]', '$_POST[options]', '$_POST[imgs]', '$_POST[selling_price]', '$_POST[price_letters]', '$_POST[purchase_price]', '$_POST[purchase_commission_price]', '$_POST[status]', '$_POST[old_selling_price]', '$_POST[year]', '$_POST[km]', '$_POST[police_number]','$_POST[provider]', '$_POST[purchase_date]','$_POST[origin]','$_POST[availability]')");


            // Je récupère le dernier ID inséré
    $id_car = $pdo->lastInsertId();
    echo $id_car;

    if($id_car>=1){
        $content .= "<div class='alert alert-success' role='alert'>
      Le véhicule a bien été ajouté au catalogue;
    </div>";
    }
    }

}

// ICI si je suis dans le cadre d'une modification
//     je récupère et j'affiche les donées actuellement en base
//     Sinon c'est que je suis dans le cadre d'un ajout et donc j'initialise 
//     les champs avec du vide
//     // chaque variable définie ci-dessous fait l'objet d"un echo dans la value d"un input
$id_car = (isset($car_actuel['id_car'])) ? $car_actuel['id_car'] : '';
$brand_car = (isset($car_actuel['brand_car'])) ? $car_actuel['brand_car'] : '';
$model_car = (isset($car_actuel['model_car'])) ? $car_actuel['model_car'] : '';
$gearbox = (isset($car_actuel['gearbox'])) ? $car_actuel['gearbox'] : '';
$motor = (isset($car_actuel['motor'])) ? $car_actuel['motor'] : '';
$type_car = (isset($car_actuel['type_car'])) ? $car_actuel['type_car'] : '';
$series_car_number = (isset($car_actuel['series_car_number'])) ? $car_actuel['series_car_number'] : '';
$first_registration_car = (isset($car_actuel['first_registration_car'])) ? $car_actuel['first_registration_car'] : '';
$cv_car = (isset($car_actuel['cv_car'])) ? $car_actuel['cv_car'] : '';
$ch_car = (isset($car_actuel['ch_car'])) ? $car_actuel['ch_car'] : '';
$car_energy = (isset($car_actuel['car_energy'])) ? $car_actuel['car_energy'] : '';
$plate_number = (isset($car_actuel['plate_number'])) ? $car_actuel['plate_number'] : '';
$number_key = (isset($car_actuel['number_key'])) ? $car_actuel['number_key'] : '';
$ext_color = (isset($car_actuel['ext_color'])) ? $car_actuel['ext_color'] : '';
$in_color = (isset($car_actuel['in_color'])) ? $car_actuel['in_color'] : '';
$global_information = (isset($car_actuel['global_information'])) ? $car_actuel['global_information'] : '';
$options = (isset($car_actuel['options'])) ? $car_actuel['options'] : '';
$imgs = (isset($car_actuel['imgs'])) ? $car_actuel['imgs'] : '';
$selling_price = (isset($car_actuel['selling_price'])) ? $car_actuel['selling_price'] : '';
$price_letters = (isset($car_actuel['price_letters'])) ? $car_actuel['price_letters'] : '';
$purchase_commission_price = (isset($car_actuel['purchase_commission_price'])) ? $car_actuel['purchase_commission_price'] : '';
$status = (isset($car_actuel['status'])) ? $car_actuel['status'] : '';
$old_selling_price = (isset($car_actuel['old_selling_price'])) ? $car_actuel['old_selling_price'] : '';
$year = (isset($car_actuel['year'])) ? $car_actuel['year'] : '';
$km = (isset($car_actuel['km'])) ? $car_actuel['km'] : '';
$police_number = (isset($car_actuel['police_number'])) ? $car_actuel['police_number'] : '';
$provider = (isset($car_actuel['provider'])) ? $car_actuel['provider'] : '';
$purchase_date = (isset($car_actuel['purchase_date'])) ? $car_actuel['purchase_date'] : '';
$origin = (isset($car_actuel['origin'])) ? $car_actuel['origin'] : '';
$availability = (isset($car_actuel['availability'])) ? $car_actuel['availability'] : '';

?>

<!-- ------------------------------------------------------------------------------ -->

<?php require_once('header.php');

echo $content;

?>

<!-- PAGE GESTION VEHICULE -->


      <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id_car" value="<?=$id_car?>">

        <div class ="row justify-content-center">
        <div class ="col-md-10">
        <h3 class="mt-5">  Caractéristiques générales du véhicules </h3>

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="brand_car">Marque:</label>
                <input name="brand_car" type="text" class="form-control" id="brand_car" placeholder="brand_car" value="<?=$brand_car?>">
            </div>

            <div class="form-group col-md-3">
                <label for="model_car">Modèle:</label>
                <input name="model_car" type="text" class="form-control" id="model_car" placeholder="model_car" value="<?=$model_car?>">
            </div>

            <div class="form-group col-md-3">
                <label for="motor">Motorisation:</label>
                <input name="motor" type="text" class="form-control" id="motor" placeholder="motor"value="<?=$motor?>">
            </div>

            <div class="form-group col-md-3">
                <label for="first_registration_car">Mise en circulation:</label>
                <input name="first_registration_car" type="text" class="form-control" id="first_registration_car" placeholder="first_registration_car" value="<?=$first_registration_car?>" >
            </div>

            <div class="form-group col-md-3">
                <label for="gearbox">Boite de vitesse:</label>
                <input name="gearbox" type="text" class="form-control" id="gearbox" placeholder="gearbox" value="<?=$gearbox?>">
            </div>

            <div class="form-group col-md-3">
                <label for="car_energy">Carburant:</label>
                <input name="car_energy" type="text" class="form-control" id="car_energy" placeholder="car_energy"value="<?=$car_energy?>">
            </div>

            <div class="form-group col-md-3">
                <label for="cv_car">Puissance fiscale:</label>
                <input name="cv_car" type="text" class="form-control" id="cv_car" placeholder="cv_car"value="<?=$cv_car?>">
            </div>

            <div class="form-group col-md-3">
                <label for="ch_car">Nombre de chevaux:</label>
                <input name="ch_car" type="text" class="form-control" id="ch_car" placeholder="ch_car" value="<?=$ch_car?>">
            </div>

            <div class="form-group col-md-3">
                <label for="km">km:</label>
                <input name="km" type="text" class="form-control" id="km" placeholder="km" value="<?=$km?>">
            </div>

            <div class="form-group col-md-3">
                <label for="origin">Pays d'origine:</label>
                <input name="origin" type="text" class="form-control" id="origin" placeholder="origin" value="<?=$origin?>">
            </div>

        </div>

          <h3 class="mt-5">  Autres informations</h3>

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="global_information">information globale:</label>
                <textarea name="global_information" type="text" class="form-control" id="global_information" placeholder="global_information"value="<?=$global_information?>"> </textarea>
            </div>

            <div class="form-group col-md-3">
                <label for="options">Options:</label>
                <textarea name="options" type="text" class="form-control" id="options" placeholder="options" value="<?=$options?>"></textarea>
            </div>

            <div class="form-group col-md-3">
                <label for="imgs">Photo</label>
                <input name="imgs" type="file"  id="imgs" class="form-control" value="<?=$imgs?>">
                
             </div>   
        </div>

        <h3 class="mt-5">  Informations supplémentaires  </h3>

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="number_key">Double des clefs:</label>
                <input name="number_key" type="text" class="form-control" id="number_key" placeholder="number_key" value="<?=$number_key?>" >
            </div>
            

            <div class="form-group col-md-3">
                <label for="ext_color">Couleur extérieur:</label>
                <input name="ext_color" type="text" class="form-control" id="ext_color" placeholder="ext_color" value="<?=$ext_color?>">
            </div>

            <div class="form-group col-md-3">
                <label for="in_color">Couleur intérieur:</label>
                <input name="in_color" type="text" class="form-control" id="in_color" placeholder="in_color" value="<?=$in_color?>" >
            </div>

            <div class="form-group col-md-3">
                <label for="year">Année de mise en circulation</label>
                <input name="year" type="text" class="form-control" id="year" placeholder="year" value="<?=$year?>" >
            </div>

            <div class="form-group col-md-3">
                <label for="plate_number">Plaque d'immatriculation</label>
                <input name="plate_number" type="text" class="form-control" id="plate_number" placeholder="plate_number" value="<?=$plate_number?>">
            </div>

            <div class="form-group col-md-3">
                <label for="type_car">Type</label>
                <input name="type_car" type="text" class="form-control" id="type_car" placeholder="type_car" value="<?=$type_car?>">
            </div>

            <div class="form-group col-md-3">
                <label for="series_car_number">Numéro de série</label>
                <input name="series_car_number" type="text" class="form-control" id="series_car_number" value="<?=$series_car_number?>">
            </div>

            <div class="form-group col-md-3">
                <label for="availability">Disponibilité</label>
                <input name="availability" type="text" class="form-control" id="availability" placeholder="availability" value="<?=$availability?>">
            </div>

            <div class="form-group col-md-3">
                <label for="provider">Fournisseur</label>
                <input name="provider" type="text" class="form-control" id="provider" placeholder="provider" value="<?=$provider?>" >
            </div>

            <div class="form-group col-md-3">
                <label for="purchase_date">Date d'achat</label>
                <input name="purchase_date" type="date" class="form-control" id="purchase_date" placeholder="purchase_date" value="<?=$purchase_date?>">
            </div>

            <div class="form-group col-md-3">
                <label for="status">Status</label>
                <input name="status" type="text" class="form-control" id="status" placeholder="status" value="<?=$status?>" >
            </div>

            <div class="form-group col-md-3">
                <label for="police_number">Numéro de police</label>
                <input name="police_number" type="text" class="form-control" id="police_number" placeholder="police_number" value="<?=$police_number?>" >
            </div>

        </div>

      

        <h3 class="mt-5"> Prix du véhicule </h4>

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="old_selling_price">Ancien prix</label>
                <input name="old_selling_price" type="text" class="form-control" id="old_selling_price" placeholder="old_selling_price" value="<?=$old_selling_price?>" >
            </div>

            <div class="form-group col-md-3">
                <label for="selling_price">Nouveau prix</label>
                <input name="selling_price" type="text" class="form-control" id="selling_price" placeholder="selling_price" value="<?=$selling_price?>">
            </div>

            <div class="form-group col-md-3">
                <label for="purchase_price">Prix d'achat</label>
                <input name="purchase_price" type="text" class="form-control" id="purchase_price" placeholder="purchase_price" value="<?=$purchase_price?>">
            </div>

            <div class="form-group col-md-3">
                <label for="purchase_commission_price">Commission sur achat</label>
                <input name="purchase_commission_price" type="text" class="form-control" id="purchase_commission_price" placeholder="purchase_commission_price" value="<?=$purchase_commission_price?>" >
            </div>

        </div>

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="price_letters">prix en lettre</label>
                <input name="price_letters" type="text" class="form-control" id="price_letters" placeholder="price_letters" value="<?=$price_letters?>">
            </div>

        </div>
         <div class="text-center";> 
        <button type="submit" class="btn btn-primary mb-5">Enregistrer le véhicule</button>
    </div>
    </form>
     </div>
    </div> 

<?php require_once("footer.php"); ?>