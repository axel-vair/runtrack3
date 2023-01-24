const body = document.querySelector('body');
const textAreaElement = document.createElement("textarea");
textAreaElement.setAttribute("id", "keylogger");
body.appendChild(textAreaElement);


let keylogger = ''; // on initialise une variable qui ne contient rien
document.addEventListener('keydown', (e) => {  // on écoute le document en keydown. on utilise un keybord event
    let key = e.key; // la variable key = la valeur de la clé appuyée
    if(key.length === 1) { // si la valeur de la variable key est égale à 1 alors
        keylogger += key; //on ajoute à keylogger la clé
        if(document.activeElement){ // si le focus est sur le document alors on ajoute la clé au keylogger
            keylogger += key;
        }
        textAreaElement.value = keylogger; // on ajoute la valeur de textarea a keylogger
    }
})