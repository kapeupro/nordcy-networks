<?php

include('inc/function.php');

$errors=array();
if(!empty($_POST['submitted']))
{
    //faille XSS
    $prenom    = cleanXss('prenom');
    $email     = cleanXss('email');
    $message   = cleanXss('message');
    $errors=textValidation($errors,$prenom,'prenom');
    $errors=mailValidation($errors,$email,'email');
    $errors=textValidation($errors,$message,'message',10,500);

    //If no error
    if(count($errors)==0){
        mail('nordcynetwork@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
    }
}

include ('inc/header.php'); ?>

    <section id="contact">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="" method="post" class="wrapform" novalidate>
                    <h1>Nous Contacter</h1>
                    <label for="prenom"></label>
                    <input type="text"  placeholder="Prénom" id="prenom" name="prenom" value="<?=recupInputValue('prenom');?>">
                    <span class="error"><?php if(!empty($errors['prenom'])) {echo $errors['prenom']; } ?></span>


                    <label for="email"></label>
                    <input type="email" placeholder="Email*" id="email" name="email" value="<?=recupInputValue('email');?>">
                    <span class="error"><?php if(!empty($errors['email'])) {echo $errors['email']; } ?></span>
                    <label for="message"></label>


                    <textarea id="message" name="message" placeholder=" Votre Message" value="<?=recupInputValue('message');?>"></textarea>
                    <span class="error"><?php if(!empty($errors['message'])) {echo $errors['message']; } ?></span>

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
