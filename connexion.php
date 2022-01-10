<?php

include ('inc/header.php');
include ('footer.php'); ?>

<section id="connexion">
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <h1>Create Account</h1>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <button>Sign in</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="#">
            <h1>Se connecter</h1>
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Mot de passe" />
            <a href="#">Mot de passe oublié ?</a>
            <button>Connexion</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bon retour !</h1>
                <p>Si tu as déjà un compte, connecte-toi !</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Bienvenue</h1>
                <p>Si tu n'as pas de compte et que tu souhaites nous rejoindre</p>
                <button class="ghost" id="signUp">S'inscrire</button>
            </div>
        </div>
    </div>
</div>
</section>
