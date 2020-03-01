let date = document.getElementById("date");
let client = document.getElementById("client");
let projet = document.getElementById("projet");
let contexte = document.getElementById("contexte");
let deroule = document.getElementById("deroule");
let proposition = document.getElementById("proposition");
let dateIsActive = true;
let clientIsActive = true;
let projetIsActive = false;
let contexteIsActive = false;
let derouleIsActive = false;
let propositionIsActive = false;



function display(elem){
    document.querySelector("#"+elem.attributes[0].nodeValue + " .contenu").classList.remove("cacher");
    document.querySelector("#"+elem.attributes[0].nodeValue + " .contenu").classList.add("afficher");
}
function hide(elem){
    document.querySelector("#"+elem.attributes[0].nodeValue + " .contenu").classList.remove("afficher");
    document.querySelector("#"+elem.attributes[0].nodeValue + " .contenu").classList.add("cacher");
}

//hide(date);
//hide(client);
hide(projet);
hide(contexte);
hide(deroule);
hide(proposition);

date.addEventListener("click",function(){
    console.log("Clique sur la date")
    if (dateIsActive == false){
        display(date);
        dateIsActive = true;
    } else {
        hide(date);
        dateIsActive = false;
    }
    hide(client);    
    hide(projet);
    hide(contexte);
    hide(deroule);
    hide(proposition);
});

client.addEventListener("click",function(){
    if (clientIsActive == false){
        display(client);
        clientIsActive = true;
    } else {
        hide(client);
        clientIsActive = false;
    }
    hide(date);
    hide(projet);
    hide(contexte);
    hide(deroule);
    hide(proposition);
});



projet.addEventListener("click",function(){
    if (projetIsActive == false){
        display(projet);
        projetIsActive = true;
    } else {
        hide(projet);
        projetIsActive = false;
    }
    hide(date); 
    hide(client);    
    hide(contexte);
    hide(deroule);
    hide(proposition);
});

contexte.addEventListener("click",function(){
    if (contexteIsActive == false){
        display(contexte);
        contexteIsActive = true;
    } else {
        hide(contexte);
        contexteIsActive = false;
    }
    hide(date); 
    hide(client);    
    hide(projet);
    hide(deroule);
    hide(proposition);
});

deroule.addEventListener("click",function(){
    if (derouleIsActive == false){
        display(deroule);
        derouleIsActive = true;
    } else {
        hide(deroule);
        derouleIsActive = false;
    }
    hide(date); 
    hide(client);    
    hide(projet);
    hide(contexte);
    hide(proposition);
});

proposition.addEventListener("click",function(){
    if (propositionIsActive == false){
        display(proposition);
        propositionIsActive = true;
    } else {
        hide(proposition);
        propositionIsActive = false;
    }
    hide(date); 
    hide(client);    
    hide(projet);
    hide(contexte);
    hide(deroule);
});