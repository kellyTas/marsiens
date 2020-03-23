let cafet = document.getElementById("cafet");
let dubuffet = document.getElementById("dubuffet");
let ville = document.getElementById("ville");
let levat = document.getElementById("levat");
let guichard = document.getElementById("guichard");
let couvent = document.getElementById("couvent");
let blitz = document.getElementById("blitz");
let fauteuil = document.getElementById("fauteuil");
let module = document.getElementById("module");
let cariole = document.getElementById("cariole");
let vignetteProjetSrc = document.querySelector("#vignetteProjet img");

function display(elem){ 
    
    document.querySelector("#"+elem.attributes[1].nodeValue + " .soucoupe").classList.add("afficherSoucoupe");
}

function flouter(elem1,elem2,elem3,elem4,elem5,elem6,elem7,elem8,elem9){
    let arrayElem = [elem1,elem2,elem3,elem4,elem5,elem6,elem7,elem8,elem9];
    
    for (let i =0 ; i < arrayElem.length ; i++){
        document.querySelector("#"+arrayElem[i].attributes[1].nodeValue + " h3").classList.add("flou");        
    }
    
}

function hide(elem){
    document.querySelector("#"+elem.attributes[1].nodeValue + " .soucoupe").classList.remove("afficherSoucoupe");
}

function unFlouter(elem1,elem2,elem3,elem4,elem5,elem6,elem7,elem8,elem9){
    let arrayElem = [elem1,elem2,elem3,elem4,elem5,elem6,elem7,elem8,elem9];
    for (const elem of arrayElem){
        document.querySelector("#"+elem.attributes[1].nodeValue + " h3").classList.remove("flou");        
    }
    
}

cafet.addEventListener("mouseover",function(){
    display(cafet);
    flouter(dubuffet,ville,levat,guichard,couvent,blitz,fauteuil,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/10BA/image_preview.jpg")
});
cafet.addEventListener("mouseout",function(){
    hide(cafet);
    unFlouter(dubuffet,ville,levat,guichard,couvent,blitz,fauteuil,module,cariole);
});

dubuffet.addEventListener("mouseover",function(){
    display(dubuffet);
    flouter(cafet,ville,levat,guichard,couvent,blitz,fauteuil,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/9dubuffet/image_preview.jpg");

});
dubuffet.addEventListener("mouseout",function(){
    hide(dubuffet);
    unFlouter(cafet,ville,levat,guichard,couvent,blitz,fauteuil,module,cariole);
});

ville.addEventListener("mouseover",function(){
    display(ville);
    flouter(cafet,dubuffet,levat,guichard,couvent,blitz,fauteuil,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/8sceno/1sceno.jpg");
});
ville.addEventListener("mouseout",function(){
    hide(ville);
    unFlouter(cafet,dubuffet,levat,guichard,couvent,blitz,fauteuil,module,cariole);
});
levat.addEventListener("mouseover",function(){
    display(levat);
    flouter(cafet,dubuffet,ville,guichard,couvent,blitz,fauteuil,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/7cafeLevat/1buvette.jpg");
    
});
levat.addEventListener("mouseout",function(){
    hide(levat);
    unFlouter(cafet,dubuffet,ville,guichard,couvent,blitz,fauteuil,module,cariole);
});

guichard.addEventListener("mouseover",function(){
    display(guichard);
    flouter(cafet,dubuffet,ville,levat,couvent,blitz,fauteuil,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/6guichard/1placesguichard.jpg");
});
guichard.addEventListener("mouseout",function(){
    hide(guichard);
    unFlouter(cafet,dubuffet,ville,levat,couvent,blitz,fauteuil,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/6guichard/1placesguichard.jpg");
});

couvent.addEventListener("mouseover",function(){
    display(couvent);
    flouter(cafet,dubuffet,ville,levat,guichard,blitz,fauteuil,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/5devanture/1devanture.jpg");
});
couvent.addEventListener("mouseout",function(){
    hide(couvent);
    unFlouter(cafet,dubuffet,ville,levat,guichard,blitz,fauteuil,module,cariole);
});

blitz.addEventListener("mouseover",function(){
    display(blitz);
    flouter(cafet,dubuffet,ville,levat,guichard,couvent,fauteuil,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/4blitz/1blitz.jpg");
});
blitz.addEventListener("mouseout",function(){
    hide(blitz);
    unFlouter(cafet,dubuffet,ville,levat,guichard,couvent,fauteuil,module,cariole);
});
fauteuil.addEventListener("mouseover",function(){
    display(fauteuil);
    flouter(cafet,dubuffet,ville,levat,guichard,couvent,blitz,module,cariole);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/3fauteuil/1fauteuil.jpg");   
});
fauteuil.addEventListener("mouseout",function(){
    hide(fauteuil);
    unFlouter(cafet,dubuffet,ville,levat,guichard,couvent,blitz,module,cariole);
});

module.addEventListener("mouseover",function(){
    display(module);
    flouter(cafet,dubuffet,ville,levat,guichard,couvent,blitz,fauteuil,cariole); 
    vignetteProjetSrc.setAttribute("src","assets/img/projets/2modules/1modules.jpg");   
      
});
module.addEventListener("mouseout",function(){
    hide(module);
    unFlouter(cafet,dubuffet,ville,levat,guichard,couvent,fauteuil,cariole);
});

cariole.addEventListener("mouseover",function(){
    display(cariole);
    flouter(cafet,dubuffet,ville,levat,guichard,couvent,blitz,fauteuil,module);
    vignetteProjetSrc.setAttribute("src","assets/img/projets/1cariole/1carriole.jpg");    
});
cariole.addEventListener("mouseout",function(){
    hide(cariole);
    unFlouter(cafet,dubuffet,ville,levat,guichard,couvent,fauteuil,module);
});
