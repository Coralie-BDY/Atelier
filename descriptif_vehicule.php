
<?php


 include_once("inc/header.php");


//vérifier que j'ai bien récupéré un produit sinon, retour vers index.php
if(!isset($_GET["id_car"])){
	header("location:_index.php");
	exit();
}

if(isset($_GET["id_car"])){

$r = $pdo->query("SELECT * FROM cars WHERE id_car = $_GET[id_car]");

while($cars = $r->fetch(PDO::FETCH_ASSOC)){ ?>
	<
      <section class='car-details page-section-ptb'>
         <div class='container'>
            <div class='row'>
               <div class='col-md-9'>
                  <h3> <?php  echo $cars['brand_car'] .   ' ' . $cars['model_car'] ?></h3>
               </div>

<div class='row d-flex align-content-end'>
<p><img  class='img-fluid' src= <?php echo $cars['imgs']?> >

<div class='col-md-3'>
                  <div class='car-price text-lg-right'><strong><?php  echo $cars['selling_price'] ?></strong><span>TTC</span></div>
               </div>
                <div class='row'>
               <div class='col-md-12'>
                  <div class='details-nav'>
                     <ul>
                        <li>
                           <a data-toggle='modal' data-target='#exampleModal2' data-whatever='@mdo' href='#' class='css_btn'><i class='fa fa-dashboard'></i>Prendre rendez-vous</a>
                           <div class='modal fade' id='exampleModal2' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                              <div class='modal-dialog' role='document'>
                                 <div class='modal-content'>
                                    <div class='modal-header'>
                                       <h4 class='modal-title' id='exampleModalLabel'>Prendre rendez-vous</h4>
                                       <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                    </div>
                                    <div id='std_message'></div>
                                    <div class='modal-body'>
                                       <p class='sub-title'> Vous pouvez prendre rendez-vous en remplissant ce formulaire. Nous nous engageons à confirmer votre rendez-vous dans les 24h. </p>
                                       <form class='gray-form reset_css' id='rendezVousForm' action=''>
                                          <input type='hidden' name='action' value='schedule_test_drive' /><input type='hidden' name='reference' value='c1Red' />
                                          <div class='form-group'><label>Nom*</label><input type='text' class='form-control' id='std_name' name='name' /></div>
                                          <div class='form-group'><label>Adresse Email*</label><input type='text' class='form-control'  id='std_email' name='email'></div>
                                          <div class='form-group'><label>Téléphone*</label><input type='text' class='form-control'  id='std_phone' name='phone' ></div>
                                          <div class='form-group'><label>Jour*</label><input type='text' class='form-control'  id='std_day' name='day'></div>
                                          <div class='form-group'><label>Heure*</label><input type='text' class='form-control'  id='std_time' name='time'></div>
                                          <div class='form-group'>
                                             <label>Nous vous contactons par?*</label>
                                             <div class='radio'><label><input type='radio' id='std_optradio' name='contact' value='email' checked>Email</label></div>
                                             <div class='radio'><label><input type='radio' id='std_optradio' name='contact' value='phone'>Téléphone</label></div>
                                          </div>
                                          <div class='form-group'>
                                             <div id='recaptcha2'></div>
                                          </div>
                                          <div class='form-group'><button id='submit' name='submit' type='submit' value='Send' class='button red'> Prendre rendez-vous </button><i class='fa fa-refresh fa-spin fa-3x fa-fw load_spiner'  style='display: none;'></i></div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <a data-toggle='modal' data-target='#exampleModal3' data-whatever='@mdo' href='#' class='css_btn'><i class='fa fa-tag'></i>Faire une offre</a>
                           <div class='modal fade' id='exampleModal3' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                              <div class='modal-dialog' role='document'>
                                 <div class='modal-content'>
                                    <div class='modal-header'>
                                       <h4 class='modal-title' id='exampleModalLabel'>Faire une offre</h4>
                                       <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                    </div>
                                    <div id='mao_message'></div>
                                    <div class='modal-body'>
                                       <form class='gray-form reset_css' action='' id='makeOfferForm'>
                                          <input type='hidden' name='action' value='make_an_offer' /><input type='hidden' name='reference' value='c1Red' />
                                          <div class='form-group'><label>Nom*</label><input type='text' id='mao_name' name='name' class='form-control'></div>
                                          <div class='form-group'><label>Adresse email*</label><input type='text' id='mao_email' name='email' class='form-control'></div>
                                          <div class='form-group'><label>Téléphone*</label><input type='text' id='mao_phone' name='phone' class='form-control'></div>
                                          <div class='form-group'><label>Vôtre proposition en Euros*</label><input type='text' id='mao_price' name='price' class='form-control'></div>
                                          <div class='form-group'><label>Commentaire additionnel*</label><textarea class='form-control input-message' rows='4' id='mao_comments' name='comments'></textarea></div>
                                          <div class='form-group'>
                                             <label>Nous vous contactons par?*</label>
                                             <div class='radio'><label><input type='radio' id='mao_radio' name='mao_radio' value='email' checked>Email</label></div>
                                             <div class='radio'><label><input type='radio' id='mao_radio' name='mao_radio' value='phone'>Téléphone</label></div>
                                          </div>
                                          <div class='form-group'>
                                             <div id='recaptcha3'></div>
                                          </div>
                                          <div class='form-group'><button id='submit' name='submit' type='submit' value='Send' class='button red'> Faire une offre </button></div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li><a href='javascript:window.print()'><i class='fa fa-print'></i>Imprimer cette page</a></li>
                     </ul>
                     <div id='rendezVousMessage' style='margin-bottom: 20px;'>
                        <p style='float:left;margin-right:10px;color:green;'>Votre demande de rendez-vous a été envoyée.</p>
                        <img style='width:20px;color:green;'src='../images/tick.png' alt=''>
                     </div>
                     <div id='offerMessage'>
                        <p style='float:left;margin-right:10px;color:green;'>Votre offre a été envoyée.</p>
                        <img style='width:20px;color:green;'src='../images/tick.png' alt=''>
                     </div>
                  </div>
               </div>
            </div>
            <div class='row'>
               <div class='col-md-8'>
                  <div class='slider-slick'>
                     <div class='slider slider-for detail-big-car-gallery'> <img class='img-fluid' src='../images/detail/big/c1Red/1.jpg' alt=''><img class='img-fluid' src='../images/detail/big/c1Red/2.jpg' alt=''><img class='img-fluid' src='../images/detail/big/c1Red/3.jpg' alt=''><img class='img-fluid' src='../images/detail/big/c1Red/4.jpg' alt=''><img class='img-fluid' src='../images/detail/big/c1Red/5.jpg' alt=''><img class='img-fluid' src='../images/detail/big/c1Red/6.jpg' alt=''><img class='img-fluid' src='../images/detail/big/c1Red/7.jpg' alt=''><img class='img-fluid' src='../images/detail/big/c1Red/8.jpg' alt=''></div>
                     <div class='slider slider-nav'> <img class='img-fluid' src='../images/detail/thum/c1Red/1.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/c1Red/2.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/c1Red/3.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/c1Red/4.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/c1Red/5.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/c1Red/6.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/c1Red/7.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/c1Red/8.jpg' alt=''> </div>
                  </div>
                  <div id='tabs'>
                     <ul class='tabs'>
                        <li data-tabs='tab1' class='active'> <span aria-hidden='true' class='icon-diamond'></span> <?php  $cars['global_information']  ?></li>
                        <li data-tabs='tab2'><span aria-hidden='true' class='icon-list'></span><?php echo  $cars['options'] ?></li>
                     </ul>
                     <div id='tab1' class='tabcontent'>
                     	<h6>Quelques mots sur le véhicule</h6>
                        <p>
                        <h3 style='font-size: 14px;'> - Autres informations pratiques </h3>
                        <p>Nombre de propriétaires: 2</p>
                        <p>Double des clefs: Oui</p>
                        <p>Contrôle technique effectué: Oui, moins de 6 mois</p>
                        <h3 style='font-size: 14px;'>- Caractéristiques intérieures et extérieures du véhicule</h3>
                        <p>Sièges: Tissu noir</p>
                        <p>Jantes: Toles</p>
                        <p>Couleur de la peinture extérieure: Rouge mettalic</p>
                        <h3 style='font-size: 14px;'>- Etat général</h3>
                        <p>Extérieur: Très bon état</p>
                        <p>Intérieur: Très bon état</p>
                        <p>Précisions sur les défauts de carrosserie : Rayure légère sur le parchoc arrière</p>
                        <h3 style='font-size: 14px;'>- Entretien effectué</h3>
                        <p>Carnet d'entretien disponible : Oui, avec entretien et suivi complet chez Citroën</p>
                        <p>Dernières réparations effectuées : Révision et vidange complète chez Citroën</p>
                        <p>** Distribution effectuée ? **  Moteur à chaine</p>
                        <p>Le Moteur à chaine</p>
                        <h3 style='font-size: 14px;'>- INFORMATIONS SUR LA GARANTIE :</h3>
                        La garantie offerte couvre :</p>   - Moteur</p>   - Boîte de vitesses</p>   - Pont</p>   - Ingrédients</p>** Extension de garantie possible **</p>Jusqu'a 1 an</p>Disponibilité du LUNDI au SAMEDI</p>** sur rendez-vous **</p>Premier contact par téléphone.</p>Nous contacter au</p>** 07.82.14.81.41 **</p>Le tarif affiché est hors frais d'immatriculation et frais de mise à la route.</p></p>
                     </div>

                       <div id='tab2' class='tabcontent'>
                        <h6>Vision globale des options</h6>
                        <table class='table table-bordered'>
                           <tbody>
                              <tr>
                                 <th scope='row'>Peinture intégrale</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Ordinateur de bord</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Radio CD USB</th>
                              </tr>
                              <tr>
                                 <th scope='row'>USB</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Auxiliaire</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Volant cuir</th>
                              </tr>
                              <tr>
                                 <th scope='row'>ABS</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Phares antibrouillard</th>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class='col-md-4'>
                  <div class='car-details-sidebar'>
                     <div class='details-block details-weight'>
                        <h5>DESCRIPTION</h5>
                        <ul>
                           <li> <span>Marque</span> <strong class='text-right'><?php echo $cars['brand_car']?></strong></li>
                           <li> <span>Modèle</span> <strong class='text-right'><?php echo $cars['model_car']?></strong></li>
                           <li> <span>Boite</span> <strong class='text-right'><?php echo  $cars['gearbox'] ?></strong></li>
                           <li> <span>Moteur</span> <strong class='text-right'><?php echo $cars['type_car'] ?></strong></li>
                           <li> <span>Chevaux fiscaux</span> <strong class='text-right'><?php echo $cars['cv_car'] ?> </strong></li>
                           <li> <span>1ère immatriculation </span> <strong class='text-right'><?php $cars['first_registration_car'] ?></strong></li>
                           <li> <span>Kilométrage</span> <strong class='text-right'> <?php $cars['km'] ?></strong></li>
                           <li> <span>Carburant</span> <strong class='text-right'><?php echo $cars['car_energy'] ?> </strong></li>
                           <li> <span>Couleur extérieure</span> <strong class='text-right'><?php echo $cars['ext_color'] ?> </strong></li>
                           <li> <span>Couleur intérieure</span> <strong class='text-right'> <?php $cars['in_color'] ?></strong></li>
                        </ul>
                     </div>
                     <div class='details-social details-weight'>
                        <h5>Partager</h5>
                        <ul>
                           <li><a href='#'> <i class='fa fa-facebook'></i> facebook</a></li>
                        </ul>
                     </div>
                     <div class='details-phone details-weight'>
                        <div class='feature-box-3'>
                           <div class='icon'><i class='fa fa-headphones'></i></div>
                           <div class='content'>
                              <h4> (+33) 7 82 14 81 41 </h4>
                              <p> Contactez-nous </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php

}
}



require_once("inc/footer.php");

?>