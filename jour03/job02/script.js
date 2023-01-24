let columns = 6; // on a 6 images verticales donc 6 colonnes
let pieces = ""; // on a une div vide
let divs = "";

for (let i = 0; i < columns; i++) { // on boucle sur la taille du nombre de colonnes
    pieces += `<div draggable='true' class='piece' id='img${i}'></div>` // on ajoute une div avec la classe piece à chaque tour de boucle + une id
}
let cont = document.querySelector('.puzzle') // on pointe la classe pièces qui est notre container
cont.innerHTML = pieces; // on ajoute les divs à l'intérieur


// FONCTION POUR MELANGER
function shuffle() {
    let list = document.querySelector('.puzzle'), i; // on sélectionne toutes divs qui ont la classe pièce (nodelist)
    for (i = list.children.length; i >= 0; i--) {
        list.appendChild(list.children[Math.random() * i | 0]);
    }
    console.log(list)
}

for (let j = 0; j < 6; j++){
    divs += `<div id='target'></div>`
}
let divtarget = document.querySelector('.pieces')
divtarget.innerHTML = divs;

// MON DRAG AND DROP

let dragged;

let puzz = document.querySelector('.piece');
puzz.addEventListener("drag", (e) => {
    console.log("dragging");
})
puzz.addEventListener("dragstart", (e) => {
    dragged = e.target;
    e.target.classList.add("dragging");


}, false);

const target = document.getElementById("target");
target.addEventListener("dragover", (event) => {
    event.preventDefault();
}, false);
puzz.addEventListener("dragend", (e) => {
    e.target.classList.remove("dragging");

}, false);

puzz.addEventListener("dragenter", (e) => {
    if (e.target.classList.contains("dropzone")) {
        e.target.classList.add("dragover");
    }
}, false);

puzz.addEventListener("dragleave", (e) => {
    if (e.target.classList.contains("dropzone")) {
        e.target.classList.remove("dragover");
    }
}, false);

document.addEventListener("drop", (e) => {
    e.preventDefault();
    if (e.target.classList.contains("dropzone")) {
        e.target.classList.remove("dragover");
        e.target.appendChild(dragged);
    }
}, false);



