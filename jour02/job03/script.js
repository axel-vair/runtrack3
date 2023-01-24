const body = document.querySelector("body");  // on sélectionne le body
//
const button = document.createElement("button"); // on crée un bouton
button.setAttribute("id", "button"); // on lui set un id button
button.textContent = "Cliquez ici"; // on lui ajoute un text
const idButton = button.querySelector("#button"); // on sélectionne l'id button
body.appendChild(button); // on ajoute un enfant à body

const p = document.createElement("p"); // on crée un élément p
p.textContent = "0"; // on lui donne le texte 0
body.appendChild(p);

function addone(){ //on incrémente à chaque clic
    p.textContent++;
}
button.addEventListener("click", () => {
   addone(); // à chaque click on appelle la fonction addone()
})

