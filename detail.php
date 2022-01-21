<?php

session_start();

include("inc/headerdash.php")
?>


<section>


    <div class="container_detail">
        <h2>Detail Trame</h2>
        <div class="item_detail">
            <ul>
                <li><a href="ICMP">ICMP</a></li>
                <li><a href="TLSv 1.2">TLSv 1.2</a></li>
                <li><a href="TCP">TCP</a></li>
                <li><a href="UDP">UDP</a></li>
                <li><a href="TTL">TTL</a></li>  
            </ul>
        </div>


        <div class="item_detail_trame1">

            <div class="tableaux_graphe">

                <canvas id="myChart"></canvas>

            </div>

            <div class="item_detail_p">

                <div class="box_detail_0">

                <p>L'ICMP (Internet Control Message Protocol) est un protocole de signalement 
                    d'erreurs que les appareils de réseau comme les routeurs utilisent pour générer 
                    des messages d'erreur à l'adresse IP source lorsque des problèmes de réseau empêchent 
                    la livraison de paquets IP.</p>
                        <br>
                    <p>ICMP est un protocole autonome, même si les différentes notifications sont incluses 
                 dans des paquets IP standards. Pour cela, le protocole Internet traite l'extension 
                 optionnelle comme un protocole de couche supérieure. Divers services réseau, 
                 souvent utilisés comme traceroute ou Ping, sont basés sur le protocole ICMP.</p>

                </div>

                <div class="box_detail_0">

                <p>TCP = Le TCP, pour Transmission Control Protocol, ou littéralement protocole de 
                     contrôle de transmissions en français, désigne un protocole de transmission utilisé 
                     sur les réseaux IP.</p>
                     <br>
                <p>UDP = L'UDP, pour User Datagram Protocol, désigne un protocole de communication utilisé sur Internet. 
                    On le traduit en français par protocole de datagramme utilisateur. ... Typiquement, les jeux en ligne 
                    sont basés sur ce genre de protocole dans leur mode de transmission des données.</p>


                </div>

                <div class="box_detail_2">

                <p>TLSv 1.2 = La Transport Layer Security (TLS) ou « Sécurité de la couche de transport », et son 
                    prédécesseur la Secure Sockets Layer (SSL) ou « Couche de sockets sécurisée », sont des protocoles 
                    de sécurisation des échanges par réseau informatique, notamment par Internet.</p>

              
                </div>

            </div>

        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="asset/js/detailjs.js"></script>

</section>