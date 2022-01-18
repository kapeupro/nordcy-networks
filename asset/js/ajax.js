/*AJAX*/
// 
fetch('http://localhost/nordcy-networks/nordcydata.php')
.then(function(response) {
    return response.json()
    }).then(function(data){
        console.log(data[0]);
        console.log(data[0].version);
        // ici il y aura le chart.js

});

alert("Hello");

// Language: javascript
// chart.js 
