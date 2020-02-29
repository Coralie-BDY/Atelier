<?php require_once('../inc/init.php');?>
<?php require_once('header.php'); ?>



<?php


$r = $pdo->query("SELECT * FROM cars");
$total_count = $r->columnCount();

$req = $pdo->query("SELECT * FROM clients");
$total_clients = $req->columnCount();


for ($i= 0; $i < $total_count ; $i++) { 
    $meta = $r->getColumnMeta($i);
    $column[] = $meta['name'];
}

for ($i= 0; $i < $total_clients ; $i++) { 
    $meta = $req->getColumnMeta($i);
    $column_clients[] = $meta['name'];
}

?>

    <form method="POST" action="">

      <div class=container>  

      <div class="form-row">

         <div class="form-group col-md-5">
                <label for="id_car">Voiture</label>
                <select   name="id_car" class="form-control" id="id_car">
                    <?php while($car=$r->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $car['id_car']?>"><?php echo $car['id_car']?> - <?php echo $car['brand_car'] . " " . $car['model_car']?></option>
                 <?php } ?>
                </select>
            </div>

          <div class="form-group col-md-5">
                <label for="id_client">Client</label>
                <select   name="id_client" class="form-control" id="id_client">
                   <?php while($client=$req->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $client['id_client']?>"><?php echo $client['first_name'] . " " . $client['last_name']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

  <div class="form-row">

    <input type="submit" value="Générer facture" name="generer">

 </div> 
</form>


<div class='row'>

    <p>Entrer le client dans la base : <a href="gestion_clients.php">GESTION CLIENT</a> !</p>
</div>

<?php 

if (isset($_POST['generer']) && !empty($_POST['generer'])) {

    $_SESSION['id_car'] = $_POST['id_car'];
    $_SESSION['id_client'] = $_POST['id_client'];

    $ret=$pdo->query("SELECT * FROM cars WHERE id_car = '$_POST[id_car]'");

    $retour=$pdo->query("SELECT * FROM clients WHERE id_client = '$_POST[id_client]'");

    $donnees_car = $ret->fetch();
    $donnees_client = $retour->fetch(); ?>

     <form method='post'>
        <div class="form-row">
        
            <div class="form-group col-md-3">
                <label for="city_invoice">ville de facturation </label>
                <input type="text" name="city_invoice">
            </div>

            <div class="form-group col-md-3">
                <label for="">date de facturation</label>
                <input type="date" name="data_invoice">
            </div>

            <div class="form-group col-md-3">
                <label for="">TOTAL</label>
                <input type="number" name="total">
            </div>

            <div class="form-group col-md-3">
                <label for="way_of_payement">moyens de paiement</label>
                <input type="text" name="way_of_payement">
            </div>
        
            <div class="form-group col-md-3">
                <label for="reprise">reprise</label>
                <input type="text" name="reprise">
            </div>

            <div class="form-group col-md-3">
                <label for="reprise_number">nombre de reprise</label>
                <input type="text" name="reprise_number">
            </div>

            <div class="form-group col-md-3">
                <label for="ttc_total">total ttc</label>
                <input type="text" name="ttc_total">
            </div>

            <div class="form-group col-md-3">
                <label for="warranty">garantie</label>
                <input type="number" name="warranty">
            </div>

         </div>

         <div class="form-row">  

                <?php for ($i=1; $i<sizeof($column); $i++) { ?>

             <div class="form-group col-md-3">
                 <label><?php echo $column[$i] ?></label>
                 <input value="<?php echo $donnees_car[$i] ?>" name="<?php echo $column[$i] ?>">
             </div>

                <?php }
                for ($i=1; $i<sizeof($column_clients); $i++) { ?>

             <div class="form-group col-md-3">
                 <label><?php echo $column_clients[$i] ?></label>
                 <input value="<?php echo $donnees_client[$i] ?>" name="<?php echo $column_clients[$i] ?>">  
             </div>
                <?php } ?>
     <div class="form-row">
                <input class=" btn btn-primary mb-1" type="submit" value="Créer facture" name="create" >
            </div>
        </form>
    <?php }
   if(isset($_POST['create']) && !empty($_POST['create'])) {
    $pdo->query("INSERT INTO invoices ( first_name, last_name, address, postal_code, city, telephone, siret,  city_invoice, data_invoice, police_number, brand_car, model_car, type_car, series_car_number, first_registration_car, cv_car, plate_number, km, price_letters, number_key, total, reprise, reprise_number, ttc_total, way_of_payement, type, warranty,id_client, id_car ) VALUES ( '$_POST[first_name]', '$_POST[last_name]', '$_POST[address]','$_POST[postal_code]', '$_POST[city]', '$_POST[telephone]','$_POST[siret]', '$_POST[city_invoice]', '$_POST[data_invoice]', '$_POST[police_number]', '$_POST[brand_car]', '$_POST[model_car]', '$_POST[type_car]', '$_POST[series_car_number]', '$_POST[first_registration_car]', '$_POST[cv_car]', '$_POST[plate_number]', '$_POST[km]', '$_POST[price_letters]', '$_POST[number_key]', '$_POST[total]', '$_POST[reprise]', '$_POST[reprise_number]', '$_POST[ttc_total]', '$_POST[way_of_payement]', '$_POST[type]', '$_POST[warranty]', '$_SESSION[id_client]','$_SESSION[id_car]')");

    $last_id = $pdo->lastInsertId();
        if ($last_id > 0) { ?>
            <div class="alert alert-success" role="alert">
                La facture a bien été ajouté à la base de données.

            </div>
            
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                Un problème est survenu lors de l'ajout de la facture. Veuillez réessayer.
            </div>
        <?php }
    } ?>
</div>


    </form>
</div>



<?php require_once('footer.php'); ?>