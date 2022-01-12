<?php

include ('inc/header.php');
?>
    <section id="connexion">
        <div class="container">
            <div class="form-container sign-up-container">
                <form action="#" method="post">
                    <h1>Créer un compte</h1>
                    <div>
                        <label for="Nom"></label>
                        <input type="text" id="Nom" placeholder="Nom" >
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="email"></label>
                        <input type="email" id="email" placeholder="Email">
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="password"></label>
                        <input type="password" id="password" placeholder="Mot de passe">
                        <span class="error"></span>
                    </div>
                    <button>Connexion</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#" method="post">
                    <h1>Mot de pass oublié</h1>
                    <div>
                        <label for="email"></label>
                        <input type="email" id="email" placeholder="Adresse mail">
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="password"></label>
                        <input type="password" id="password" placeholder=" Nouveau Mot de passe">
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="password"></label>
                        <input type="password" id="password" placeholder=" confirmation Mot de passe">
                        <span class="error"></span>
                    </div>

                    <button>Envoyer</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <form action="#" method="post">
                            <h1>Se connecter</h1>
                            <div>
                                <label for="email"></label>
                                <input type="email" id="email" placeholder="Email">
                                <span class="error"></span>
                            </div>
                            <div>
                                <label for="password"></label>
                                <input type="password" id="password" placeholder="Mot de passe">
                                <span class="error"></span>
                            </div>

                            <button>Connexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
include ('inc/footer.php'); ?>