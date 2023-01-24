 window.addEventListener("resize", () => {
        let query1 = window.matchMedia("(min-width: 1600px)");
        let query2 = window.matchMedia("(max-width: 1599px) and (min-width: 768px)");
        let query3 = window.matchMedia("(max-width: 767px)");

        let section = document.querySelectorAll(".section");
        section.forEach(section => {
        if (query1.matches) {
            document.body.style.flexDirection = "row";
            document.body.style.justifyContent = "center";
            section.style.width = "20vw";

        } else if (query2.matches) {
            document.body.style.flexWrap = "wrap";
            document.body.style.justifyContent = "center";
            section.style.width = "40vw";
        } else if (query3.matches) {
            document.body.style.flexDirection = "column";
            document.body.style.alignItems = "center";
            section.style.width = "80vw";
        }

    })
})
