function citation(){
    const citation = document.getElementById("citation").innerHTML;
     console.log(citation);
}
 const button = document.getElementById("button");
    button.addEventListener('click', () => {
        citation();
    })

