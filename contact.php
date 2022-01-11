<?php

include ('inc/header.php'); ?>

<section id="contact">
    <div class="wrap">
        <form action="#">
            <p>Nous Contacter</p>
              <div class="contact_input">
                  <label for="prénom"></label>
                  <input type="text" id="prenom" placeholder="Prénom" />
                  <span class="error"></span>
                  <label for="email"></label>
                  <input type="email" id="email" placeholder="Email" />
                  <span class="error"></span>
                  <label for="message"></label>
                  <input type="text" id="message" placeholder="Votre message">
                  <span class="error"></span>
              </div>
            <div class="contact_button">
                <button>Envoyer</button>
            </div>
        </form>
    </div>
</section>









<?php include ('inc/footer.php');
