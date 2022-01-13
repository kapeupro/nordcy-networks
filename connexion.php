<?php
$error = [];
if (!empty($_POST['submitted'])) {

    $login = cleanXss('login');
    $password = cleanXss('password');
    $email = cleanXss('email');

   $error = emailValidation($error,$email,'email');

    $sql = "SELECT * FROM /*mettre le nom de la base de donnée*/ WHERE email = :login";
    $query = $pdo->prepare($sql);
    $query->bindValue(':login', $login, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if (!empty($user)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = array(
                'id' => $user['id'],
                'name' => $user['name'],
                'prenom' => $user['prenom'],
                'dob' => $user['dob'],
                'email' => $user['email'],
                'ip' => $_SERVER['REMOTE_ADDR'] // ::1
            );
            header('Location: index.php');
        } else {
            $error['login'] = 'Mots de passe incorrect veuillez réessayer';
        }
    } else {
        $error['login'] = 'Veuillez entrer un e-mail correct';
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
                        <input type="text" id="Nom" placeholder="Nom" value="<?php if(!empty($_POST['nom'])) {echo $_POST['nomom']; } ?>" >
                        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>
                    </div>
                    <div>
                        <label for="email"></label>
                        <input type="email" id="email" placeholder="Email" value="<?php if(!empty($_POST['email'])) {echo $_POST['email']; } ?>">
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="password"></label>
                        <input type="password" id="password" placeholder="Mot de passe" value="<?php if(!empty($_POST['password'])) {echo $_POST['password']; } ?>">
                        <span class="error"><?php if(!empty($errors['password'])) {echo $errors['password']; } ?></span>
                    </div>
                    <button>Connexion</button>
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

                    <button>Connexion</button>
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