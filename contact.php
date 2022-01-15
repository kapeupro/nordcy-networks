<?php
require_once("inc/pdo.php");
include('inc/function.php');

$errors=array();
if(!empty($_POST['submitted']))
{
    //faille XSS
    $prenom    = cleanXss('prenom');
    $email     = cleanXss('email');
    $message   = cleanXss('message');
    $errors=mailValidation($errors,$email,'email');
    $errors=textValidation($errors,$message,'message',10,500);

    //If no error
    if(count($errors)==0){
        mail('admin@wtgm7011.odns.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
    }
}
include ('inc/header.php'); ?>

    <section id="contact">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="" method="post" class="wrapform" novalidate>
                    <h1>Nous Contacter</h1>

                    <label for="prenom"></label>
                    <input type="text" placeholder="Nom Prenom" id="prenom" name="prenom" value="<?=recupInputValue('prenom');?>">
                    <span class="error"><?= viewError($errors,'prenom'); ?></span>

                    <label for="email"></label>
                    <input type="email" placeholder="Email*" id="email" name="email" value="<?= recupInputValue('email'); ?>">
                    <span class="error"><?= viewError($errors,'email'); ?></span>

                    <label for="message"></label>
                    <input type="text" placeholder="Votre message" id="message" name="message" value="" />
                    <span class="error"><?= viewError($errors,'message'); ?></span>

                    <input type="submit" name="submitted" value="ENVOYER">
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



<?php include('footer.php');
