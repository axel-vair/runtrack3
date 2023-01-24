
function jourTravaille(param1, param2, param3){
    let date = new Date(param1, param2, param3);
    let ferie = [
        '1/1/2020',
        '13/4/2020',
        '1/5/2020',
        '8/5/2020',
        '25/5/2020',
        '1/6/2020',
        '14/7/2020',
        '15/8/2020',
        '1/11/2020',
        '11/11/2020',
        '25/12/2020',
    ]

    let jour = date.getDate();
    let mois = date.getMonth();
    let annee = date.getFullYear();
    let joursemaine = date.getDay();
    console.log(joursemaine);

    let dateconsole = jour + '/' + mois + 1 + '/' + annee;

    if(ferie.includes(dateconsole)){
        console.log("le " + jour + " " + mois + " " + annee + " " + "est un jour férié");
    }else if(joursemaine == 6 || joursemaine == 0){
        console.log("Non, le " + jour + " " + mois + " " + annee + " " + "est un week-end");
    }else{
        console.log("Oui, le " + jour + " " + mois + " " + annee + " " + "est un jour travaillé");
    }

}

jourTravaille();