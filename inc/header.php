<?php
include_once("auth.php");
include_once("function.php");
if(!empty($_SESSION))debug($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="asset/css/style.css">
    <title>NORDCY NETWORK</title>
</head>
<body>

<header id="container_header">
    <div class="header-nn">
        <a href="index.php">NORDY NETWORK</a>
    </div>
    <div class="header-nav">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<?php

