<?php

require('inc/pdo.php');
require('inc/function.php');

verifUserAlreadyConnected();
$succes = false;
$error = [];

if (!empty($_POST['submitted'])) {
    // Faille xss
    $name = cleanXss('name');
    $prenom = cleanXss('prenom');
    $email = cleanXss('email');
    $password = cleanXss('password');
    $password_confirm = cleanXss('password_confirm');

    //Validation
    $password_valid = samePassword($error,$password, $password_confirm, 'password_confirm');
    // Error
    $error = validInput($error,$name, 'name', 1, 100);
    $error = validInput($error,$prenom, 'prenom', 1, 200);
    $error = mailValidation($error, $email, 'email');

    if(empty($error['email'])) {
        $sql = "SELECT * FROM inscription WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email,PDO::PARAM_STR);
        $query->execute();
        $verifEmail = $query->fetch();
        if(!empty($verifEmail)) {
            $error['email'] = 'Cet email existe déjà';
        }
    }

    $error = validInput($error,$password_confirm, 'password_confirm', 3, 255);
    /*If not error*/
    if (count($error) == 0) {
        $token = generateRandomString(100);
        $password_valid = password_hash($password_confirm, PASSWORD_DEFAULT);
        $sql = "INSERT INTO inscription (name, prenom, email, password, token, created_at, role) 
                VALUES (:nam,:prenom,:email, :password, :token, NOW(), 'user' )";

        // Prepare la request
        $query = $pdo->prepare($sql);
        // Injection SQL
        $query->bindValue(':nam', $name, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $password_valid, PDO::PARAM_STR);
        $query->bindValue(':token', $token, PDO::PARAM_STR);

        //executer la query
        $query->execute();
        $succes = true;
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
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom" value="<?php if(!empty($_POST['prenom'])) {echo $_POST['prenom']; } ?>">
                        <span class="error"><?php if(!empty($errors['prenom'])) {echo $errors['prenom']; } ?></span>

                        <label for="nom"></label>
                        <input type="text" id="nom" name="nom" placeholder="nom" value="<?php if(!empty($_POST['nom'])) {echo $_POST['nom']; } ?>">
                        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="E-mail" value="<?php if(!empty($_POST['email'])) {echo $_POST['email']; } ?>">
                        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

                        <label for="password"></label>
                        <input type="text" id="password" name="password" placeholder="Mot de passe" value="<?php if(!empty($_POST['password'])) {echo $_POST['password']; } ?>">
                        <span class="error"><?php if(!empty($errors['password'])) {echo $errors['password']; } ?></span>

                        <label for="password2"></label>
                        <input type="text" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe" value="<?php if(!empty($_POST['password_confirm'])) {echo $_POST['password_confirm']; } ?>">
                        <span class="error"><?php if(!empty($errors['password_confirm'])) {echo $errors['password_confirm']; } ?></span>

                        <button id="submitted"><a href="">S'inscrire</a></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include ('inc/footer.php');
?>