<?php
require_once('../inc/init.php');
require_once("header.php");



if(isset($_GET['id_invoice'])){
    $r=$pdo->query('SELECT * FROM invoices WHERE id_invoice ='.$_GET['id_invoice']);
    $donnee= $r->fetch(PDO::FETCH_ASSOC);
}

?>

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

    <div class="row d-flex justify-content-end">

        <div class="col-md-6">
            <h1> <?php echo $donnee['first_name'].' '.$donnee['last_name']?> </h1>
            <h2> <?php echo $donnee['address']?> </h2>
            <h3> <?php echo $donnee['postal_code'].' '.$donnee['city']?> </h3>
            <h4> +33 <?php echo $donnee['telephone']?></h4>
            <?php

                        if($donnee['type'] == '1'){
                    ?>
                <h5> Siren : <?php echo $donnee['siret']?> </h5>
                <?php
                        }

                    ?>
        </div>

    </div>

    <div class="row">
        <ul class="d-flex justify-content-between">
            <li>Facture Nº</li>
            <li>
                <?php echo $donnee['number_invoice'] ?>
            </li>
            <li>
                <?php echo $donnee['city_invoice'] ?>, le</li>
            <li class="data_invoice">
                <?php echo $donnee['data_invoice'] ?>
            </li>
        </ul>
    </div>

    <div class="row  mt-2">

        <?php if ($donnee["type"] == 1) { ?>
            <p style="font-weight:bold"> Véhicule vendu sans garantie à marchand, dans l'état.</p>
            <?php } else if($donnee["warranty"] == 0) { ?>
                <p style="font-weight:bold"> Véhicule vendu sans garantie sous la demande du client.</p>
                <?php } else { ?>
                    <p style="font-weight:bold"> Véhicule garantie
                        <?php echo $donnee['warranty'] ?>, en collaboration avec le Prestataire Opteven (voir conditions) </p>
                    <?php } ?>

                        <p style="font-weight:bold"> Véhicule d'occasion </p>

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
                                <td>KM au compteur non garantie</td>
                            </tr>
                        </table>

                        <br>
                        <br>

                

    </div>

    <div class="row mt-2">

        <p style="font-weight:bold"> Vendu pour la somme de:</p>
        <p style="text-transform: uppercase;">
            <?php echo $donnee['price_letters'] ?>
        </p>
        <div class="d-flex bd-highlight">
            <div class="mr-auto bd-highlight" style="font-weight:bold">Vendu avec
                <?php echo $donnee['number_key']?> clé</div>
            <div class="ml-auto bd-highlight backgroundGey" style="font-weight:bold">Total
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
            <p class="backgroundGey" style="word-spacing:0px;padding: 0 10px;font-weight:bold">
                <?php echo $donnee['reprise_number']?> € </p>
        </div>
    </div>

    <div class="row d-flex justify-content-between invoiceTotal mt-2">

        <div class="col-md-5">
            <div class="headerTotal" style="font-weight:bold"> Vendeur </div>
        </div>

        <div class="col-md-5 d-flex flex-column justify-content-around" style="padding:10px 0 10px 10px">

            <div class="d-flex bd-highlight">
                <div class="mr-auto bd-highlight" style="font-weight:bold">Total TTC</div>
                <div class="ml-auto bd-highlight backgroundGeySmall" style="padding: 0 10px;font-weight:bold">
                    <?php echo $donnee['ttc_total']?> €</div>
            </div>

            <div class="d-flex bd-highlight">
                <div class="mr-auto bd-highlight" style="font-weight:bold">Mode de réglement</div>
                <div class="ml-auto bd-highlight" style="padding: 0 10px;">
                    <?php echo $donnee['way_of_payment']?>
                </div>
            </div>

        </div>

    </div>

    <div class="row mt-4">
        <p style="font-weight:bold"> CLAUSE DE RESERVE DE PROPRIETE </p>
        <P> La responsabilité du véhicule vendu est transférée à l'acquéreur dés la délivrance, mais il n'en acquerra la propriété qu'après paiement complet du prix, frais, accessoires et cartes grises conformément à la loi 80.335 du 12 mai 1980.</p>
        <p style="font-weight:bold"> ART 297 A I 1ER DU CGI TVA SUR MARGE </p>
    </div>

    </div>

<?php
require_once("inc/footer.php");
?>