// TAUX DE  CHANGE 
let jasonRequest = new XMLHttpRequest();

jasonRequest.onreadystatechange = ()=>{
    if(jasonRequest.readyState === XMLHttpRequest.DONE){
        if(jasonRequest.status === 200){
          var values = JSON.parse(jasonRequest.responseText);
          console.log(values)
          var devise = document.getElementById("devise");
          var taux = document.getElementById("taux");
          devise.innerHTML = `<th scope="col">DEVISE</th>`
          taux.innerHTML = `<th scope="col">TAUX</th>` 
          for(let value in values){
            devise.innerHTML += `<td>${value}</td>`;
            taux.innerHTML += `<td>${values[value]}</td>`
          }
        }else{
            console.log("Une erreur est survenue");
        }
    }else{
        console.log("chargement en cours")
    }
};
jasonRequest.open('GET', 'data/tauxDeChange.json');
jasonRequest.send();