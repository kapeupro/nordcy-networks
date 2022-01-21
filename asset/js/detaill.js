fetch('http://localhost/nordcy-networks/inc/getData.php')
.then(function(response) {
    return response.json()
    }).then(function(data){
        console.log(data);

        const datasql = document.querySelector('#datainsert')


        data.forEach(element => {
            /*Le += cela rajoute a chaque fois
            Mais si il y a que le = il va m'afficher la derniers ligne 
            */ 
            datasql.innerHTML += `
        <tr>
            <td>${element.id}</td>
            <td>${element.protocolName}</td>
            <td>${element.checksumStatus}</td>
            <td>${element.ipFrom}</td>
            <td>${element.ipDest}</td>
        </tr>
        `
        });})