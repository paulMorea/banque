// BLOG
let blogRequest = new XMLHttpRequest();

blogRequest.onreadystatechange = ()=>{
    if(blogRequest.readyState === XMLHttpRequest.DONE){
        if(blogRequest.status === 200){
          var values = JSON.parse(blogRequest.responseText);
          console.log(values[0].titre)
          var blog = document.getElementById("blogContainer");
          for(let blogtxt of values){
            blog.innerHTML += `<div id="id">ID : ${blogtxt.id}</div>`;
            blog.innerHTML += `<div id="titre">Titre : ${blogtxt.titre}</div>`;
            blog.innerHTML += `<div id="contenu">Contenu : ${blogtxt.contenu}</div>`;
          }
        }else{
            console.log("Une erreur est survenue");
        }
    }else{
        console.log("chargement en cours")
    }
};
blogRequest.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles');
blogRequest.send();