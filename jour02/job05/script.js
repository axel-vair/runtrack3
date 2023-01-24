// Créez un fichier style.css. Définissez la taille minimale de votre body à 4096px.
// Ajoutez un <footer> qui prend toute la largeur de votre page en position : fixed en bas de votre fenêtre.
// De la même façon qu’une barre de chargement, la couleur du footer doit évoluer en fonction du pourcentage de scrolling.

window.addEventListener("scroll", ()=> {
    let hauteur = document.documentElement.scrollHeight - window.innerHeight; // on récupère la hauteur de la fenêtre
    let position = window.scrollY; // on récupère la valeur du scroll effectué sur la page
    let largeur = document.documentElement.clientWidth; // on récupére la valeur de la largeur
    let scroll = (position / hauteur) * largeur; // on calcul le % avec un produit

    document.querySelector('footer').style.width = scroll + "px"; // on selectionne le footer et on vient changer le css de l'élement
    //notamment la largeur par le résultat du scroll, en px.
})