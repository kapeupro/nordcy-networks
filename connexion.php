<?php
session_start();
$_SESSION['role'] = 'client';

require_once("inc/pdo.php");
require_once("inc/function.php");

verifUserAlreadyConnected();

$errors = [];
if(!empty($_POST['submitted'])) {
    // Faille xss
    $login   = trim(strip_tags($_POST['email']));
    $password  = trim(strip_tags($_POST['password']));

    $sql = "SELECT * FROM nordcynetwork_user WHERE email = :login";
    $query = $pdo->prepare($sql);
    $query->bindValue(':login',$login,PDO::PARAM_STR);
    $query->execute();
    $user= $query->fetch();


    if(empty($user)) {
        $errors['email'] = 'Email invalide';
    } else {
        if (password_verify($password , $user['password'] )==true){
            $_SESSION['email']=array(
                'id'    =>$user['id'],
                'email' =>$user['email'],
                'status'=>$user['status'],
                'ip'     =>$_SERVER['REMOTE_ADDR'],//::1
            );
        }else {
            $errors['password'] = 'Mot de passe incorrect';
        }
    }
    if(count($errors) == 0) {
        header('Location: index.php');
    }
}


include ('inc/header.php');
?>
    <section id="connexion">
        <div class="container">
            <div class="form-container sign-up-container">
                <form action="#" method="post">
                    <h1>Créer un compte</h1>
                    <div>
                        <label for="Nom"></label>
                        <input type="text" id="Nom" placeholder="Nom" value=" ">
                        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>
                    </div>
                    <div>
                        <label for="email"></label>
                        <input type="email" id="email" placeholder="Email" value=" ">
                        <span class="error"><?= viewError($errors,'email'); ?></span>
                    </div>
                    <div>
                        <label for="password"></label>
                        <input type="password" id="password" placeholder="Mot de passe" value=" ">
                        <span class="error"><?= viewError($errors,'password'); ?></span>
                    </div>
                    <input type="submit" name="submitted" value="Connexion">
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#" method="post">
                    <h1>Se connecter</h1>
                    <div>
                        <label for="email"></label>
                        <input type="email" id="email" placeholder="Email" value="<?php if(!empty($_POST['email'])) {echo $_POST['email']; } ?>">
                        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>
                    </div>
                    <div>
                        <label for="password"></label>
                        <input type="password" id="password" placeholder="Mot de passe" value="<?php if(!empty($_POST['password'])) {echo $_POST['password']; } ?>">
                        <span class="error"><?php if(!empty($errors['password'])) {echo $errors['password']; } ?></span>
                    </div>

                    <div class="mdp_oublié">
                        <a href="resetmdp.php"> Mot de passe oublié ?</a>
                    </div>

                    <input type="submit" name="submitted" value="Connexion">
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
include ('inc/footer.php'); ?>