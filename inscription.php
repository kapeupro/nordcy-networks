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
                        <p>Bienvenue sur notre site</p>
                        <label for="prenom"</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom">
                        <span class="error"></span>

                        <label for="nom"></label>
                        <input type="text" id="nom" name="nom" placeholder="nom">
                        <span class="error"></span>

                        <label for="email"></label>
                        <input type="email">
                        <span class="error"></span>

                        <div class="sex">
                            <label for="sexe">Sexe : </label>
                            <select name="sexe" id="sexe">
                                <option value="">--- Sélectionner ---</option>
                                <option value="homme">Homme</option>
                                <option value="femme">Femme</option>
                                <option value="non-défini">Non-défini</option>
                            </select>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include ('inc/footer.php');
?>