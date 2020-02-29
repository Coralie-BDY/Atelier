<?php
require_once('../inc/init.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>facture</title>
    <style>
        footer ul{
    text-align: center;
}

footer ul li{
    display: inline-block;
}

h1,h2,h3,h4,h5,h6{
  margin: 5px;
}

.justify-content-end{
  text-align: right;
}

.invoiceHeader, .invoiceContent,
.invoiceFooter, .invoiceReprise{
  border: 1px solid;
}

.invoiceHeader ul{
  list-style-type: none;
  padding: 10px 10px 10px 10px;
  width: 100%;
  margin: 0;
  font-weight: bold;
}

.invoiceHeader ul li{
  display: inline-block;
  width: 100%;
}

.invoiceContent, .invoiceFooter, .invoiceReprise{
  padding: 10px 0 10px 10px;
  display: block;
}

.invoiceFooter p{
  display: inline-block;
}

.invoiceContent ul{
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.backgroundGey{
  background: rgba(0,0,0,0.4);
  width: 300px;
  word-spacing: 170px;
}

.invoiceReprise{
  border-top:0;
}

.invoiceHeader{
  background: rgba(0,0,0,0.4);
}

.invoiceTotal >div{
  border: 1px solid;
  margin: 0;
  padding:0;
  height:200px;
}

.invoiceTotal div.headerTotal {
  background: rgba(0,0,0,0.4);
  border:none;
  text-align: center;
}

table tr td:first-of-type{
  font-weight: bold;
}

table tr td:nth-of-type(2){
  padding-left: 50px;
}

.backgroundGeySmall{
  background: rgba(0,0,0,0.4);
}

</style>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />


 


</head>
<body>




<?php
if(isset($_GET['id_invoice'])){
    $r=$pdo->query("SELECT * FROM invoices WHERE id_invoice ='$_GET[id_invoice]'");
    $donnee= $r->fetch(PDO::FETCH_ASSOC);
}

?>
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <h1> SH AUTO </h1>
            <h2> 2 chemin du Ponceau </h2>
            <h3> 02200 Soissons </h3>
            <h4> Tél: 07.82.14.81.41 </h4>
            <h5> Siren : 844 913 822 </h5>
            <h6> contactshauto@gmail.com </h6>
        </div>

    </div>

    <div class="d-flex justify-content-end">

       <div class="col-md-6">
          <h2> <?php echo $donnee["last_name"] ?> </h2>
          <h2> <?php echo $donnee["first_name"] ?> </h2>
          <h4> <?php echo $donnee["address"] ?> </h4>
          <h4> <?php echo $donnee["postal_code"] ?> </h4>
          <h4> <?php echo $donnee["city"] ?> </h4>
          <h4> <?php echo $donnee["telephone"] ?> </h4>
          <h6> <?php echo $donnee["siret"] ?> </h6>
        </div>

     </div>

<div class="row invoiceHeader">
        <ul class="d-flex justify-content-between">
          <li>Facture Nº</li>
          <li><?php echo $donnee["id_invoice"] ?></li>
    
        </ul>

         <p> <?php echo $donnee["city_invoice"] ?>, le : </p>
          <p class= ml-5> <?php echo $donnee["data_invoice"] ?></p>
      </div>


    <div class="row ">

        <h3> Voiture </h3>


                        <table>
                            <tr>
                                <td>NºPolice</td>
                                <td>
                                    <?php echo $donnee['police_number'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Marque</td>
                                <td>
                                    <?php echo $donnee['brand_car']?>
                                </td>
                            </tr>
                            <tr>
                                <td>Modèle</td>
                                <td>
                                    <?php echo $donnee['model_car']?>
                                </td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>
                                    <?php echo $donnee['type_car']?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nº Série</td>
                                <td>
                                    <?php echo $donnee['series_car_number']?>
                                </td>
                            </tr>
                            <tr>
                                <td>1ère mise en circulation</td>
                                <td class="first_registration_car">
                                    <?php echo $donnee['first_registration_car']?>
                                </td>
                            </tr>
                            <tr>
                                <td>CV</td>
                                <td>
                                    <?php echo $donnee['cv_car']?>
                                </td>
                            </tr>
                            <tr>
                                <td>Immatriculation</td>
                                <td>
                                    <?php echo $donnee['plate_number']?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kilométrage</td>
                                <td>
                                    <?php echo $donnee['km']?>
                                </td>
                                
                            </tr>
                        </table>

                        <br>
                        <br>

                

    </div>

    <div class="row mt-2">

        <p style="font-weight:bold"> Vendu pour la somme de :</p>
        <p style="text-transform: uppercase;" class="ml-4 mr-5">
            <?php echo $donnee['price_letters'] ?>
        </p>
        <div class="d-flex bd-highlight">
            <div class="mr-auto bd-highlight" style="font-weight:bold">Vendu avec
                <?php echo $donnee['number_key']?> clé</div>
            <div class="ml-5 bd-highlight backgroundGey" style="font-weight:bold">Total
                <?php echo $donnee['total']?>€</div>
        </div>
    </div>

    <div class="row">
        <div class="d-flex bd-highlight">
            <p style="word-spacing:100px;font-weight:bold"> Reprise:
                <?php echo $donnee['reprise']?>
            </p>
        </div>

        <div class="d-flex justify-content-end">
            <p class="backgroundGey ml-5" style="word-spacing:0px;padding: 0 10px;font-weight:bold">
                <?php echo $donnee['reprise_number']?> € </p>
        </div>
    </div>

    <div class="row d-flex justify-content-between invoiceTotal mt-2">

    
        <div class="col-md-5 d-flex flex-column justify-content-around" style="padding:10px 0 10px 10px">

            <div class="d-flex bd-highlight">
                <div class="mr-auto bd-highlight" style="font-weight:bold">Total TTC</div>
                <div class="ml-auto bd-highlight backgroundGeySmall" style="padding: 0 10px;font-weight:bold">
                    <?php echo $donnee['ttc_total']?> €</div>
            </div>

            <div class="d-flex bd-highlight">
                <div class="mr-auto bd-highlight" style="font-weight:bold">Mode de réglement</div>
                <div class="ml-auto bd-highlight" style="padding: 0 10px;">
                    <?php echo $donnee['way_of_payement']?>
                </div>
            </div>

        </div>

    </div>

    <div class="row mt-4">
        <p style="font-weight:bold"> CLAUSE DE RESERVE DE PROPRIETE </p>
        <p> La responsabilité du véhicule vendu est transférée à l'acquéreur dés la délivrance, mais il n'en acquerra la propriété qu'après paiement complet du prix, frais, accessoires et cartes grises conformément à la loi 80.335 du 12 mai 1980.</p>
        <p style="font-weight:bold"> ART 297 A I 1ER DU CGI TVA SUR MARGE </p>
    </div>
</div>
 </div>   
</body>
</html>