// on initialise un tableau avec les jours de la semaine
// on parcours le tableau avec une boucle for
// on affiche l'index l'index dans la console

function afficherjourssemaines(){
    let jour = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
    for(i = 0; i < jour.length; i++){
        console.log(jour[i]);
    }
}
console.log(afficherjourssemaines());