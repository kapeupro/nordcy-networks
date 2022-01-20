<?php

require_once("inc/pdo.php");
require_once("inc/function.php");

//var_dump($_POST);
$errors = [];




if(!empty($_POST['submitted'])){
    //FAILLE XS
    $email = cleanXss('email');
    $password = cleanXss('password');
    //Validation
    $errors = mailValidation($errors,$email,'email');
    $errors = textValidation($errors,$password,'password');


    $user = requestVerifLogin($email);

   

    if(empty($user)){

        $errors['email'] = "Cet email n'existe pas";

    }

    var_dump($password);
    if(empty($password)){
        $errors['password'] = "Veuillez remplir un mot de passe";
    
    }

    else{
        if(password_verify($password , $user['password'] )){
        
            /* création de session*/
            session_start();
            $_SESSION['user']=array(
                'id'=>$user['id_user'],
                'email' =>$user['email'],
                'prenom' =>$user['prenom'],
                'nom' =>$user['nom'],
                'status'=>$user['status'],
                'ip'=>$_SERVER['REMOTE_ADDR']
            );
        }
        if(count($errors) == 0) {
            //var_dump('ok');

            header('Location: indexclient.php');
        }
    }
}

include ('inc/header.php');
?>
<section id="connexion">
    <div class="container">
        <div class="form-container sign-in-container">
            <form action="connexion.php" method="post">
                <h1>Se connecter</h1>
                <div>
                    <label for="email"></label>
                    <input type="email" name="email" id="email" placeholder="Email" value="<?php if(!empty($_POST['email'])) {echo $_POST['email']; } ?>">  <!--a modifier par recupInputValue('email')-->
                    <span class="error"><?php if(!empty($errors['email'])) {echo $errors['email']; } ?></span>


                </div>
                <div>
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe" value="<?php if(!empty($_POST['password'])) {echo $_POST['password']; } ?>">
                    <span class="error"><?php if(!empty($errors['password'])) {echo $errors['password']; } ?></span>
                </div>

                <div class="mdp_oublié">
                    <a href="resetmdp.php"> Mot de passe oublié ?</a>
                </div>

                <input type="submit" name="submitted" value="Connexion" id="connexion_subm">
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bon retour !</h1>
                    <p>Si tu as déjà un compte, connecte-toi !</p>
                    <button class="ghost" id="signIn">Connexion</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bienvenue</h1>
                    <p>Si tu n'as pas de compte et que tu souhaites nous rejoindre</p>
                    <button class="ghost" id="signUp"><a href="inscription.php">S'inscrire</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('footer.php');