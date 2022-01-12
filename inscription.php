<?php
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
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom">
                        <span class="error"></span>

                        <label for="nom"></label>
                        <input type="text" id="nom" name="nom" placeholder="nom">
                        <span class="error"></span>

                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="E-mail">
                        <span class="error"></span>

                        <label for="password"></label>
                        <input type="text" id="password" name="password" placeholder="Mot de passe">
                        <span class="error"></span>

                        <label for="password2"></label>
                        <input type="text" id="password2" name="password2" placeholder="Confirmer votre mot de passe">
                        <span class="error"></span>

                        <button><a href="">S'inscrire</a></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include ('inc/footer.php');
?>