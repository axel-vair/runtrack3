window.addEventListener("resize", () => {
    let query1 = window.matchMedia("(max-width: 1920px) and (min-width: 1680px)");
    let query2 = window.matchMedia("(max-width: 1680px) and (min-width: 1280px)");
    let query3 = window.matchMedia("(max-width: 1280px)");
    let lien = document.querySelector('.link');
    
    if (query1.matches) {
        lien.href = "style2.css";
    } else if (query2.matches) {
        lien.href = "style3.css";
    } else if (query3.matches) {
        lien.href = "style4.css";
    } else {
        lien.href = "style1.css";
    }
})