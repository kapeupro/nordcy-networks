console.log('test')

const inscription = $('#inscription')

const fleche = $('.cta-fleche')
const defilement = $('.item-pro-1')

fleche.on('click',function (e){
    defilement.animate()
})
const sr = ScrollReveal();

fetch('http://localhost:8888/nordcy-networks/inc/getData.php')
.then(function(response) {
    return response.json()
    }).then(function(data){
        console.log(data);
        //une trame est une ligne du tableau 
        //donc une trame est englobe par une balise <tr> et </tr>
        //chaque tour de boucle de data et une ligne 
        //data[i]= une ligne 
        //data[i].ttl ou .autre chose pour recupere la valeur 
        //et cette valeur et englobe par des td
        
       $("#datainsert").append("<td>")
       $("#datainsert").append(data[0].id)
       $("#datainsert").append("</td>")

       $("#datainsert").append("</td>")
       $("#datainsert").append(data[0].date)
       $("#datainsert").append("</td>")
        // ici il y aura le chart.js
        let ttl = data.map(function (e) {
            return e.ttl;
      }); 
      console.log(ttl);
      //console.log(data);
      
    });
