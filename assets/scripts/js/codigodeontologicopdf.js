
if (screen.width < 600){
    alert ("mediana");
    location.href = '/ ../documentos/CODIGO_DEONTOLOGICO_O_DE_CONDUCTA_DE_RADIO_LA_U_ONLINE_FACSO.pdf';
    ocultarpdf();
    mostrarboton();
}
else if (screen.width > 600){
    mostrarpdf();
    ocultarboton();
    alert ("grande") 
}

function color(){
 var c = document.getElementById("color");
    c.style.background = "#897899";
 }
function mostrarboton(){
var bt1 = document.getElementById("btndescarga");
        //bt1.style.display = "inline-block";
        bt1.style.position = "relative";
}
function mostrarpdf(){
    var pdf1 = document.getElementById("idpdf");
        //pdf1.style.display = "inline-block";
        pdf1.style.position = "relative"
}
function punterosi3(x){
var psi3 = document.getElementById("punteroid3");
        psi3.style.display = "inline-block";
        psi3.style.position = "relative";
}






/*Detecta salida de puntero*/
function ocultarboton(){       
    var bt1 = document.getElementById("btndescarga");
        bt1.style.display = "none ";
}
function ocultarpdf(){
    var pdf1 = document.getElementById("idpdf");
    pdf1.style.display = "none ";
}
function punterono3(x){       
    var pno3 = document.getElementById("punteroid3");
        pno3.style.display = "none ";
}
