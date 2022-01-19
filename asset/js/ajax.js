/*AJAX*/
// 
fetch('http://localhost/nordcy-networks/data.php')
.then(function(response) {
    return response.json()
    }).then(function(data){
        console.log(data[0]);
        console.log(data[0].version);
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

        

});

alert("Hello");

// Language: javascript
// chart.js 
