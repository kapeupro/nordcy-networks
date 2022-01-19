fetch('http://localhost/nordcy-networks/inc/getData.php')
.then(function(response) {
    return response.json()
    }).then(function(data){
        console.log(data);
        // ici il y aura le chart.js
        let ttl = data.map(function (e) {
            return e.ttl;
      }); 
      console.log(ttl);
      //console.log(data);
      
    });

const data = {
  labels: [
    'UDP',
    'ICMP',
    'TCP',
    'TLSv1.2',
  ],
  datasets: [{
    label: 'My First Dataset',
    Chartdata: [300, 50, 100, 40],
    backgroundColor: [
      'rgba(245,55,132,2)',
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)',
    ],
    hoverOffset: 4
  }]
};

  const config = {
    type: 'doughnut',
    Chartdata: data,
  };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

