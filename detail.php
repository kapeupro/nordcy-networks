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

                <p><strong>ICMP (Internet Control Message Protocol)</strong> est un protocole de signalement 
                    d'erreurs que les appareils de réseau comme les routeurs utilisent pour générer 
                    des messages d'erreur à l'adresse IP source lorsque des problèmes de réseau empêchent 
                    la livraison de paquets IP.</p>
                        <br>
                    <p><strong>ICMP</strong> est un protocole autonome, même si les différentes notifications sont incluses 
                 dans des paquets IP standards. Pour cela, le protocole Internet traite l'extension 
                 optionnelle comme un protocole de couche supérieure. Divers services réseau, 
                 souvent utilisés comme traceroute ou Ping, sont basés sur le protocole ICMP.</p>

                </div>

                <div class="box_detail_0">

                <p><strong>TCP</strong> = Le TCP, pour Transmission Control Protocol, ou littéralement protocole de 
                     contrôle de transmissions en français, désigne un protocole de transmission utilisé 
                     sur les réseaux IP.</p>
                     <br>
                <p><strong>UDP</strong> = L'UDP, pour User Datagram Protocol, désigne un protocole de communication utilisé sur Internet. 
                    On le traduit en français par protocole de datagramme utilisateur. ... Typiquement, les jeux en ligne 
                    sont basés sur ce genre de protocole dans leur mode de transmission des données.</p>


                </div>

                <div class="box_detail_2">

                <p><strong>TLSv 1.2</strong> = La Transport Layer Security (TLS) ou « Sécurité de la couche de transport », et son 
                    prédécesseur la Secure Sockets Layer (SSL) ou « Couche de sockets sécurisée », sont des protocoles 
                    de sécurisation des échanges par réseau informatique, notamment par Internet.</p>

              
                </div>

            </div>

        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="asset/js/detailjs.js"></script>

</section>

<section>

<div id="tableau">
            <table id="tableau_logs">
                <div class="table_div">
                    <thead class="head_table">
                        <tr>
                            <th>ID</th>
                            <th>protocolPortsFrom</th>
                            <th>checksumStatus</th>
                            <th>IpFrom</th>
                            <th>IpFest</th>
                        </tr>
                    </thead>

                <tbody id="datainsert" class="body_table">
                        
                </tbody>

            </div>
        </table>
    </div>
    <script src=asset/js/detaill.js></script>
</section>

<section>   
    <div class="container_ip_information-0">
            <h2>IP FROM</h2>
            <br>
        <p><strong>c0a8014a = 192.168.1.74</strong></p>
        <p><strong>acd913e3 = 172.217.19.227</strong></p>
        <p><strong>incoonu = d83aa80c</strong></p>
    </div>

    <br>

    <div class="container_ip_information-1">
            <h2>IP DEST</h2>
            <br>
        <p><strong>3470ff25 = inconnu</strong></p>
        <p><strong>acd913e3 = 172.217.19.227</strong></p>
        <p><strong>c0a8014a = 192.168.1.74</strong></p>
    </div>


</section>