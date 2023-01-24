// @media (max-width: 1920px) and (min-width: 1680px){
//     body{
//         background-color: #ffca4b;
//     }
// }
// @media (max-width: 1680px) and (min-width: 1280px){
//     body{
//         background-color: #275fa0;
//     }
// }
// @media (max-width: 1280px){
//     body{
//         background-color: #ffffff;
//     }
// }

window.addEventListener("resize", () => {
    let query1 = window.matchMedia("(max-width: 1920px) and (min-width: 1680px)");
    let query2 = window.matchMedia("(max-width: 1680px) and (min-width: 1280px)");
    let query3 = window.matchMedia("(max-width: 1280px)");

    if (query1.matches) {
        document.body.style.backgroundColor = "#ffca4b";
    } else if (query2.matches) {
        document.body.style.backgroundColor = "#275fa0";
    } else if (query3.matches) {
        document.body.style.backgroundColor = "#ffffff";
    } else {
        document.body.style.backgroundColor = "#88c1d0";
    }

})