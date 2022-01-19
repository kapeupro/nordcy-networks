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
                let protocolchart = new Chart(protocolname, protocolconfig);            
            });
