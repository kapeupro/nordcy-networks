console.log('test')

const inscription = $('#inscription')

const fleche = $('.cta-fleche')
const defilement = $('.item-pro-1')

fleche.on('click',function (e){
    defilement.animate()
})
const sr = ScrollReveal();

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
            <td>${element.date}</td>
            <td>${element.version}</td>
            <td>${element.headerLength}</td>
            <td>${element.service}</td>
            <td>${element.identification}</td>
            <td>${element.status}</td>
            <td>${element.flagsCode}</td>
            <td>${element.ttl}</td>
            <td>${element.checksumStatus}</td>
            <td>${element.checksumCode}</td>
            <td>${element.headerChecksum}</td>
            <td>${element.ipFrom}</td>
            <td>${element.ipDest}</td>
        </tr>
        `
        });


        

        
        
         









       

        // ici il y aura le chart.js
        let ttl = data.map(function (e) {
            return e.ttl;
      }); 
      console.log(ttl);
      //console.log(data);
      
    });
