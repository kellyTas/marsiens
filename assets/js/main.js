window.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM entièrement chargé et analysé");
    let header = document.querySelector("header");
    let lastScrollValue = 0;
    console.log(header);
    document.addEventListener('scroll',() => {
        let top  = document.documentElement.scrollTop;
    if(lastScrollValue < top) {
        header.classList.add("hidden");
        console.log("disparition activé")
    
    } else {
        header.classList.remove("hidden");
    }
    lastScrollValue = top;
    });
  });

let isActive = false;
let isDisplayed = false;
//let header = document.querySelector("header");



function displayMenu(){
    if(isActive == false){
        document.getElementById("navToggle").style.visibility="visible";
        document.getElementById("navToggle").style.opacity="1";
        document.getElementById("navToggle").style.height="100vh";
        document.getElementById("burgerMenuImg").src="assets/img/logo/burgerAnimation.gif";
        isActive = true;
    }
    else{
        document.getElementById("navToggle").style.visibility="hidden";
        document.getElementById("navToggle").style.opacity="0";
        document.getElementById("navToggle").style.height="0";
        document.getElementById("burgerMenuImg").src="assets/img/logo/menu_burger-512.png";
        isActive = false ;
    }
}

function displayDescription(){
    if(!isDisplayed){
        document.getElementById("descriptionProjet").style.visibility="visible";
        document.getElementById("descriptionProjet").style.opacity="1";
        document.getElementById("descriptionProjet").style.height="auto";
        document.getElementById("plusProjet").src="assets/img/logo/moins.png";
        isDisplayed = true;
    }
    else{
        document.getElementById("descriptionProjet").style.visibility="hidden";
        document.getElementById("descriptionProjet").style.opacity="0";
        document.getElementById("descriptionProjet").style.height="0";
        document.getElementById("plusProjet").src="assets/img/logo/plus.png";
        isDisplayed = false ;
    }
}

