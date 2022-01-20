/*AJAX*/
        fetch('http://localhost/nordcy-networks/inc/getdata.php')
        .then(function(response) {
            return response.json()
            }).then(function(data){
                console.log(data);
                // ici il y aura le chart.js
                let protocolName = data.map(function (e) {
                    return e.protocolName;
                });
                console.log(protocolName);

                let udpcount = 0;
                let tlscount = 0;
                let icmpcount = 0;
                let tcpcount = 0;

                data.forEach(function(e){
                    if(e.protocolName == "UDP"){
                        udpcount++;
                    }
                    else if(e.protocolName == "TCP"){
                        tcpcount++;
                    }
                    else if(e.protocolName == "ICMP"){
                        icmpcount++;
                    }
                    else if(e.protocolName == "TLSv1.2"){
                        tlscount++;
                    }
                });

                // ici il y aura le chart.js
                let protocolgraphe = document.getElementById('myChart');
                let protocolname = protocolgraphe.getContext('2d');

                let protocolconfig = {
                    type: 'doughnut',
                    data: {
                        labels: [
                            'UDP',
                            'TLSv1.2',
                            'TCP',
                            'ICMP',
                        ],
                        datasets: [{
                            //label: 'Base de données',
                            data: [udpcount, tlscount, tcpcount, icmpcount],
                            backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)'
                            ],
                            //hoverOffset: 4
                        }]
                    },
                   }
                let protocolchart = new Chart(protocolname, protocolconfig);
                
                /* Nouvelle Trames ChecksumStatus*/

                let checksumStatus = data.map(function (e) {
                    return e.checksumStatus;
                });
                console.log(checksumStatus);0

                let disabledpersentage = 0;
                let goodpersentage = 0;

                data.forEach(function(e){
                    if(e.checksumStatus == "disabled"){
                        disabledpersentage++;
                    }
                    else if(e.checksumStatus == "good"){
                        goodpersentage++;
                    }
                });

                // ici il y aura le chart.js
                let checksumgraphe = document.getElementById('myChart2');
                let checksumname = checksumgraphe.getContext('2d');

                let checksumconfig = {
                    type: 'doughnut',
                    data: {
                        labels: [
                            'Checksum disabled',
                            'Checksum good',
                        ],
                        datasets: [{
                            //label: 'Base de données',
                            data: [disabledpersentage, goodpersentage],
                            backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)'
                            ],
                            //hoverOffset: 4
                        }]
                    },
                    /*options: {
                        responsive: true,
                        legend: {
                            position: 'right',
                        },
                        title: {
                            display: true,
                            text: 'Protocoles utilisés lors des attaques réseau (en %)',
                            position: 'top'
                        },
                    */}
                let checksumchart = new Chart(checksumname, checksumconfig);

                let ttl = data.map(function (e) {
                    return e.ttl;
                });
                console.log(ttl);

                let ttl128count = 0;
                let ttl99count = 0;
                let ttl121count = 0;
                let ttl117count = 0;

                data.forEach(function(e){
                    if(e.ttl == "128"){
                        ttl128count++;
                    }
                    else if(e.ttl == "99"){
                        ttl99count++;
                    }
                    else if(e.ttl == "121"){
                        ttl121count++;
                    }
                    else if(e.ttl == "117"){
                        ttl117count++;
                    }
                });

                // ici il y aura le chart.js
                let ttlgraphe = document.getElementById('myChart3');
                let ttlname = ttlgraphe.getContext('2d');

                let ttlconfig = {
                    type: 'polarArea',
                    data: {
                        labels: [
                            'TTL 128',
                            'TTL 99',
                            'TTL 121',
                            'TTL 117',
                        ],
                        datasets: [{
                            label: 'TTL 128' , 
                            data: [ttl128count, ttl99count, ttl121count, ttl117count],
                            backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)'
                            ],
                            hoverOffset: 4
                        }]
                    },
                     }
                let ttlchart = new Chart(ttlname, ttlconfig);

                /* Nouvelle Trames protocolPortsFrom */
                let protocolPortsFrom = data.map(function (e) {
                    return e.protocolPortsFrom;
                });
                console.log(protocolPortsFrom);
                
                let portsFrom50046count = 0;
                let portsFrom63440count = 0;
                let portsFrom51062count = 0;

                data.forEach(function(e){
                    if(e.protocolPortsFrom == "50046"){
                        portsFrom50046count++;
                    }
                    else if(e.protocolPortsFrom == "63440"){
                        portsFrom63440count++;
                    }
                    else if(e.protocolPortsFrom == "51062"){
                        portsFrom51062count++;
                    }
                });

                // ici il y aura le chart.js
                let portsFromgraphe = document.getElementById('myChart4');
                let portsFromname = portsFromgraphe.getContext('2d');

                let portsFromconfig = {
                    type: 'polarArea',
                    data: {
                        labels: [
                            'Port From 50046',
                            'Port From 63440',
                            'Port From 51062',
                        ],
                        datasets: [{
                            label: 'Ports From' ,
                            data: [portsFrom50046count, portsFrom63440count, portsFrom51062count],
                            backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                            ],
                            hoverOffset: 4
                        }]
                    },
                        }
                let portsFromchart = new Chart(portsFromname, portsFromconfig);
                    
                /* Nouvelle Trames protocolPortDest */

                let protocolPortsDest = data.map(function (e) {
                    return e.protocolPortsDest;
                });
                console.log(protocolPortsDest);

                let portsDest3481count = 0;
                let portsDest443count = 0;

                data.forEach(function(e){
                    if(e.protocolPortsDest == "3481"){
                        portsDest3481count++;
                    }
                    else if(e.protocolPortsDest == "443"){
                        portsDest443count++;
                    }
                });

                // ici il y aura le chart.js
                let portsDestgraphe = document.getElementById('myChart5');
                let portsDestname = portsDestgraphe.getContext('2d');

                let portsDestconfig = {
                    type: 'pie',
                    data: {
                        labels: [
                            'Port Dest 3481',
                            'Port Dest 443',
                        ],
                        datasets: [{
                            label: 'Ports Dest' ,
                            labels: [
                                'Port Dest 3481',
                                'Port Dest 443',
                            ],
                            data: [portsDest3481count, portsDest443count],
                            backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)'
                            ],
                            hoverOffset: 4
                        }]
                    },
                        }
                let portsDestchart = new Chart(portsDestname, portsDestconfig);

                /* Nouvelle Trames sur Graphe 1 */

                let ipFrom = data.map(function (e) {
                    return e.ipFrom;
                });
                console.log(ipFrom);

                let ipFromc0a8014acount = 0;
                let ipFromacd913e3count = 0;
                let ipFromd83aa80ccount = 0;

                data.forEach(function(e){
                    if(e.ipFrom == "c0a8014a"){
                        ipFromc0a8014acount++;
                    }
                    else if(e.ipFrom == "acd913e3"){
                        ipFromacd913e3count++;
                    }
                    else if(e.ipFrom == "d83aa80c"){
                        ipFromd83aa80ccount++;
                    }
                });
                
                // ici il y aura le chart.js
                let ipFromgraphe = document.getElementById('myChart6');
                let ipFromname = ipFromgraphe.getContext('2d');

                let ipFromconfig = {
                    type: 'pie',
                    data: {
                        labels: [
                            'c0a8014a',
                            'acd913e3',
                            'd83aa80c',
                        ],
                        
                        datasets: [{
                            label: 'IP From' ,
                            data: [ipFromc0a8014acount, ipFromacd913e3count, ipFromd83aa80ccount],
                            backgroundColor: [
                            'rgb(255, 129, 132)',
                            'rgb(54, 142, 135)',
                            'rgb(255, 205, 186)'
                            ],
            
                        }]
                    },
                        }
                let ipFromchart = new Chart(ipFromname, ipFromconfig);
                

            });
