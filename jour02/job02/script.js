const body = document.querySelector('body'); // On cible le body
const article = document.createElement('article'); // Création de la balise article
article.textContent = "L'important n'est pas la chute, mais l'atterrissage"; // On ajoute le texte à article
body.appendChild(article); // On dit que l'enfant de body est article

function showhide(){ //on initialise une fonction
    if(article.style.display !== 'none'){ // si idArticle est initié à none
        article.style.display = 'none'; // alors display none
    }else{
        article.style.display = "block"; //sinon on le passe en block
    }
}
button.addEventListener("click",() => {
    showhide();

});


