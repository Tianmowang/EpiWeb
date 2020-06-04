<?php
    require "vues/header.html.php";

?>
        
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Restons en contact</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row">
                    <div class="col-lg-6 mb-5 tm-contact-box">
                      <div class="tm-contact-form-wrap">
                        <form id="contact-form" action="" method="post" class="tm-contact-form">
                            <div class="form-group">
                              <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Votre nom" required="" />
                            </div>
                            <div class="form-group">
                              <input type="text" id="contact_firstname" name="contact_firstname" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Votre prénom" required="" />
                            </div>
                            <div class="form-group">
                              <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Votre email" required="" />
                            </div>
                             <div class="form-group">
							 <select class="form-control rounded-0 border-top-0 border-right-0 border-left-0">
								<option disabled selected>L'objet de votre message</option>
								<option>Adhérer au fan-club</option>
								<option>Adhérer au hater-club</option>
								<option>Autre...</option>
							 </select>
                            </div>                   
                            <div class="form-group">
                              <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                            </div>
                    
                            <div class="form-group mb-0">
                              <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                                Envoyer le message
                              </button>
                            </div>
                          </form>
                      </div>                    
                    </div>
                    <div class="col-lg-6 mb-5 tm-contact-box">
                      <div class="tm-double-border-1 tm-border-gray">
                        <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                            <p class="mb-4">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p class="mb-3">
                              10-12 Rue Planchat, 75020 Paris
                            </p>
                            <p class="mb-1">Tel: <a href="tel:0155252800" class="tm-link">01 55 25 28 00</a></p>
                            <p>Email: <a href="mailto:info@epyweb.com" class="tm-link">info@epyweb.com</a></p>
                        </div>                    
                      </div>                  
                    </div>
                </div>
                
                <div class="row pb-5">
                  <div class="mapouter">
                      <div class="gmap_canvas">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.301698090954!2d2.3969334159898237!3d48.852457079286886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6727775042f2f%3A0x826e1eb47f989d50!2s10%20Rue%20Planchat%2C%2075020%20Paris!5e0!3m2!1sfr!2sfr!4v1590957891496!5m2!1sfr!2sfr" width="100%" height="440" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      </div>
                  </div>
                </div>
            </section>
            
  <?php
    require "vues/footer.html.php";
?>