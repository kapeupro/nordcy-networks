<?php
session_start();


if (empty($_SESSION['user']['id']))
{
    header('Location: 404.php');
}
else {
    //var_dump($_SESSION['user']);
}


include ('inc/headerdash.php')
?>
<section id="dashboard">
    <div class="dashboard_container0">
        <div class="dashboard_container1">
            <div class="dashboard_buttons">
                <div class="dashboard_btn">
                    <h1 class="text-center mt-5 mb-4">Bonjour, <?= $user['prenom']; ?></h1>
                    <h3 class="text-center"> Comment allez-vous aujourd'hui ? </h3>
                </div>
                <div class="dashboard_btn">
                    <a href="dashboard.php">Dashboard</a>
                </div>
                <div class="logs_btn">
                    <a href="logs.php">Logs</a>
                </div>
                <div class="details_btn">
                    <a href="detail.php">Détails</a>
                </div>
            </div>
        </div>
        <div class="dashboard_container2">
            <!-- canvas -->
            <div>
                <canvas id="myChart">

                </canvas>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src=asset/js/Chart.js></script>

</section>
