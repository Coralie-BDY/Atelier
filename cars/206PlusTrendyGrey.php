
      <section class='inner-intro bg-1 bg-overlay-black-70'>
         <div class='container'>
            <div class='row text-center intro-title'>
               <div class='col-md-6 text-md-left d-inline-block'>
                  <h1 class='text-white'>206+ 1.1 Trendy</h1>
               </div>
               <div class='col-md-6 text-md-right float-right'></div>
            </div>
         </div>
      </section>
      <section class='car-details page-section-ptb'>
         <div class='container'>
            <div class='row'>
               <div class='col-md-9'>
                  <h3> 206+ 1.1 Trendy </h3>
               </div>
               <div class='col-md-3'>
                  <div class='car-price text-lg-right'><strong> 4890 €</strong><span>TTC</span></div>
               </div>
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
                                          <input type='hidden' name='action' value='schedule_test_drive' /><input type='hidden' name='reference' value='206PlusTrendyGrey' />
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
                                          <input type='hidden' name='action' value='make_an_offer' /><input type='hidden' name='reference' value='206PlusTrendyGrey' />
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
                     <div class='slider slider-for detail-big-car-gallery'> <img class='img-fluid' src='../images/detail/big/206PlusTrendyGrey/1.jpg' alt=''><img class='img-fluid' src='../images/detail/big/206PlusTrendyGrey/2.jpg' alt=''><img class='img-fluid' src='../images/detail/big/206PlusTrendyGrey/3.jpg' alt=''><img class='img-fluid' src='../images/detail/big/206PlusTrendyGrey/4.jpg' alt=''><img class='img-fluid' src='../images/detail/big/206PlusTrendyGrey/5.jpg' alt=''><img class='img-fluid' src='../images/detail/big/206PlusTrendyGrey/6.jpg' alt=''><img class='img-fluid' src='../images/detail/big/206PlusTrendyGrey/7.jpg' alt=''><img class='img-fluid' src='../images/detail/big/206PlusTrendyGrey/8.jpg' alt=''></div>
                     <div class='slider slider-nav'> <img class='img-fluid' src='../images/detail/thum/206PlusTrendyGrey/1.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/206PlusTrendyGrey/2.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/206PlusTrendyGrey/3.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/206PlusTrendyGrey/4.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/206PlusTrendyGrey/5.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/206PlusTrendyGrey/6.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/206PlusTrendyGrey/7.jpg' alt=''> <img class='img-fluid' src='../images/detail/thum/206PlusTrendyGrey/8.jpg' alt=''> </div>
                  </div>
                  <div id='tabs'>
                     <ul class='tabs'>
                        <li data-tabs='tab1' class='active'> <span aria-hidden='true' class='icon-diamond'></span> Informations Générales</li>
                        <li data-tabs='tab2'><span aria-hidden='true' class='icon-list'></span>Options</li>
                     </ul>
                     <div id='tab1' class='tabcontent'>
                        <h6>Quelques mots sur le véhicule</h6>
                        <p>
                        <h3 style='font-size: 14px;'> - Autres informations pratiques </h3>
                        <p>Nombre de propriétaires: 1</p>
                        <p>Double des clefs: Oui</p>
                        <p>Contrôle technique effectué: Oui, moins de 6 mois</p>
                        <h3 style='font-size: 14px;'>- Caractéristiques intérieures et extérieures du véhicule</h3>
                        <p>Sièges: Tissu noir</p>
                        <p>Jantes: Tôles</p>
                        <p>Couleur de la peinture extérieure: Gris metallic</p>
                        <h3 style='font-size: 14px;'>- Etat général</h3>
                        <p>Extérieur: Bon état général</p>
                        <p>Intérieur: Bon état général</p>
                        <p>Précisions sur les défauts de carrosserie : Rayures légères sur le pare choc avant, rayures légères sur le pare choc arrière</p>
                        <h3 style='font-size: 14px;'>- Entretien effectué</h3>
                        <p>Carnet d'entretien disponible : Oui</p>
                        <p>Dernières réparations effectuées : Pneus avant neufs, vidange neuve</p>
                        <p>** Distribution effectuée ? **  Non</p>
                        <p>Le </p>
                        <h3 style='font-size: 14px;'>- INFORMATIONS SUR LA GARANTIE :</h3>
                        La garantie offerte couvre :</p>   - Moteur</p>   - Boîte de vitesses</p>   - Pont</p>   - Ingrédients</p>** Extension de garantie possible **</p>Jusqu'a 1 an</p>Disponibilité du LUNDI au SAMEDI</p>** sur rendez-vous **</p>Premier contact par téléphone.</p>Nous contacter au</p>** 07.82.14.81.41 **</p>Le tarif affiché est hors frais d'immatriculation et frais de mise à la route.</p></p>
                     </div>
                     <div id='tab2' class='tabcontent'>
                        <h6>Vision globale des options</h6>
                        <table class='table table-bordered'>
                           <tbody>
                              <tr>
                                 <th scope='row'>Vitres électriques</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Peinture intégrale</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Crochet d'attelage</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Ordinateur de bord</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Radio CD USB</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Volant cuir</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Climatisation manuelle</th>
                              </tr>
                              <tr>
                                 <th scope='row'>ABS</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Direction Assistée</th>
                              </tr>
                              <tr>
                                 <th scope='row'>ESP</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Fixation ISOFIX</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Anti-patinage</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Phares antibrouillard</th>
                              </tr>
                              <tr>
                                 <th scope='row'>Fermeture centralisée</th>
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
                           <li> <span>Marque</span> <strong class='text-right'>Peugeot</strong></li>
                           <li> <span>Modèle</span> <strong class='text-right'>206+</strong></li>
                           <li> <span>Boite</span> <strong class='text-right'>Manuelle</strong></li>
                           <li> <span>Moteur</span> <strong class='text-right'>1.1 L</strong></li>
                           <li> <span>Chevaux fiscaux</span> <strong class='text-right'>4</strong></li>
                           <li> <span>1ère immatriculation </span> <strong class='text-right'>04/10</strong></li>
                           <li> <span>Kilométrage</span> <strong class='text-right'>36000</strong></li>
                           <li> <span>Carburant</span> <strong class='text-right'>Essence</strong></li>
                           <li> <span>Couleur extérieure</span> <strong class='text-right'>Gris metallic</strong></li>
                           <li> <span>Couleur intérieure</span> <strong class='text-right'>Tissu noir</strong></li>
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
      