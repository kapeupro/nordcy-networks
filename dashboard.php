<?php
require_once('inc/auth.php');
if (client_connecte()){


include ('inc/headerdash.php')
?>
<section id="dashboard">
    <div class="wrap">
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
            <div class="dashboard_graph">
                        <!--Graph 1-->
            </div>
        </div>
        <div class="dashboard_container2">
                        <!--Graph 2-->
        </div>
    </div>
</section>
<?php

}
else {
    //forcer_client_connecte();
}


include ('inc/footer.php');


?>

