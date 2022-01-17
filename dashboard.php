<?php
session_start();

include ('inc/headerdash.php')
?>
<section id="dashboard">
    <div class="dashboard_container0">
        <div class="dashboard_container1">
            <div class="dashboard_buttons">
                <div class="dashboard_btn">
                    <a href="#">Dashboard</a>
                </div>
                <div class="logs_btn">
                    <a href="#">Logs</a>
                </div>
                <div class="details_btn">
                    <a href="#">Détails</a>
                </div>
            </div>
        </div>
        <div class="dashboard_container2">
            <!-- canvas -->
        <div>
            <canvas id="myChart">
                
            </canvas>
        </div>
                

                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src=asset/js/Chart.js></script>

</section>