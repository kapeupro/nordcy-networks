<?php

include ('inc/header.php'); ?>

    <section id="contact">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="#">
                    <h1>Nous Contacter</h1>
                    <label for="prenom"></label>
                    <input type="text" id="prenom" placeholder="Prénom" />
                    <span class="error"></span>
                    <label for="email"></label>
                    <input type="email" id="email" placeholder="Email" />
                    <span class="error"></span>
                    <label for="message"></label>
                    <input type="text" id="message" placeholder="Message" />
                    <span class="error"></span>
                    <button>Envoyer</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h1>Coordonnées</h1>
                    <p>Numéro 01 70 48 90 43</p>
                    <p>Du Lundi au Vendredi de 9:00 à 18:00</p>
                    <p>Le Samedi de 10:00 à 18:00</p>
                </div>
            </div>
        </div>
    </section>









<?php include ('inc/footer.php');
