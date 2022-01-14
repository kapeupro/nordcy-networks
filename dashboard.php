<?php
require_once('inc/auth.php');
if (!client_connecte()){

    header('location: /connexion.php');
    exit();
}

include ('inc/headerdash.php') ?>


<section id="dashboard">
    <div class="wrap">
        <div class="dashboard_container1">
            <div class="dashboard_buttons">
                <input type="submit" value="Dashboard">
                <input type="submit" value="Logs">
                <input type="submit" value="Détails">
            </div>
            <div class="dashboard_graph">

            </div>
        </div>
        <div class="dashboard_container2">

        </div>
    </div>
</section>
