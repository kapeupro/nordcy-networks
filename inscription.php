<?php

require('inc/pdo.php');
require('inc/function.php');


$succes = false;
$error = [];

if (!empty($_POST['submitted'])) {
    // Faille xss
    $prenom    = cleanXss('prenom');
    $nom       = cleanXss('nom');
    $email = cleanXss('email');
    $password  = cleanXss('password');
    $password2 = cleanXss('password2');

    // Validation
    $errors = emailValidation($error,$email,'email');


    if(empty($error['email'])) {
        if(empty($errors['email'])) {
            $sql = "SELECT * FROM nordcynetwork_user WHERE email = :email";
            $query = $pdo->prepare($sql);
            $query->bindValue(':email',$email,PDO::PARAM_STR);
            $query->execute();
            $verifPseudo = $query->fetch();
            if(!empty($verifPseudo)) {
                $errors['email'] = 'Vous avez déjà un compte avec cette adresse mail';
            }
        }
    }

        // password
        if(!empty($password) || !empty($password2)) {
            if($password != $password2) {
                $errors['password'] = 'Veuillez renseigner des mot de passe identiques';
            } elseif (mb_strlen($password2) < 6) {
                $errors['password'] = 'Min 6 caractères pour votre mot de passe';
            }
        } else {
            $errors['password'] = 'Veuillez renseigner un mot de passe';

        }
        if(count($errors) == 0) {

            // generate token
            $token = generateRandomString(100);

            // hashpassword
            $hashpassword = password_hash($password,PASSWORD_DEFAULT);

            $sql = "INSERT INTO `nordcynetwork_user`( `nom` , `prenom` ,`email`,`password`,`token`,`status`,`created_at`) 
                VALUES (:nom,:prenom,:email,:password,:token,'user',NOW())";
            $query = $pdo->prepare($sql);
            $query->bindValue(':nom',$nom,PDO::PARAM_STR);
            $query->bindValue(':prenom',$prenom,PDO::PARAM_STR);
            $query->bindValue(':email',      $email,       PDO::PARAM_STR);
            $query->bindValue(':password',   $hashpassword,PDO::PARAM_STR);
            $query->bindValue(':token',      $token,       PDO::PARAM_STR);
            $query->execute();
            // redirection
            $success=true;
            
            echo('Félicitations vous allez etre rediriger dans 5 seconde vers la page accueil');
        }
}
include('inc/header.php');
?>
<section id="inscription">
    <div class="container">
        <div class="connect_wrap">
            <div class="text_connect">
                <h2>Si tu as déjà un compte </h2>
                <p>Connecte toi !</p>
                <button><a href="connexion.php">Se connecter</a></button>
            </div>

        </div>
        <div class="overlay-container">
            <div class="overlay">

                <form action="" method="post" class="formulaire_insc">
                    <p>Bienvenue sur notre site !</p>
                    <div class="separator_form"></div>
                    <label for="prenom"</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" value="<?=recupInputValue('prenom');?>">
                    <span class="error"><?php if(!empty($errors['prenom'])) {echo $errors['prenom']; } ?></span>

                    <label for="nom"></label>
                    <input type="text" id="nom" name="nom" placeholder="nom" value="<?=recupInputValue('nom');?>">
                    <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="E-mail" value="<?=recupInputValue('email');?>">
                    <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

                    <label for="password"></label>
                    <input type="text" id="password" name="password" placeholder="Mot de passe" value="">
                    <span class="error"><?php if(!empty($errors['password'])) {echo $errors['password']; } ?></span>

                    <label for="password2"></label>
                    <input type="text" id="password2" name="password2" placeholder="Confirmer votre mot de passe" value="<?php if(!empty($_POST['password2'])) {echo $_POST['password2']; } ?>">
                    <span class="error"><?php if(!empty($errors['password2'])) {echo $errors['password2']; } ?></span>

                    <input type="submit" name="submitted" value="Inscription">
                </form>


            <div class="overlay-container">
                <div class="overlay">

                    <form action="" method="post" class="formulaire_insc">
                        <p>Bienvenue sur notre site !</p>
                        <div class="separator_form"></div>
                        <label for="prenom"</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom" value="<?=recupInputValue('prenom');?>">
                        <span class="error"><?php if(!empty($errors['prenom'])) {echo $errors['prenom']; } ?></span>

                        <label for="nom"></label>
                        <input type="text" id="nom" name="nom" placeholder="nom" value="<?=recupInputValue('nom');?>">
                        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="E-mail" value="<?=recupInputValue('email');?>">
                        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

                        <label for="password"></label>
                        <input type="text" id="password" name="password" placeholder="Mot de passe" value="">
                        <span class="error"><?php if(!empty($errors['password'])) {echo $errors['password']; } ?></span>

                        <label for="password2"></label>
                        <input type="text" id="password2" name="password2" placeholder="Confirmer votre mot de passe" value="">
                        <span class="error"><?php if(!empty($errors['password2'])) {echo $errors['password2']; } ?></span>

                        <input type="submit" name="submitted" value="Inscription">
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('footer.php');?>