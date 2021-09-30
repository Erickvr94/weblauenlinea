//window.onload = function(){
   // document.getElementById("botonenviar1").addEventListener("click",validarFormulario);


//function validarFormulario(){
    var formularioValidado = document.getElementById('formulariodelivery');
    formularioValidado.addEventListener('submit', function(e){
        e.preventDefault();
        var datos = new FormData(formularioValidado);
        alert("click");
        console.log(datos);
        console.log(datos.get('fecha'));
        console.log(datos.get('pedidomusical'));

        fetch('delivery_control.php',{
            method: 'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data =>{
            console.log(data)
        })
    })

    var txtlistaprogramacionmusical,txtpedidomusical,txtnombrerecibe,txtnombreenvia, txthorarioprograma, txtfecha, txttextarea;

    txtfecha = document.getElementById('fecha_id').value;
    txtpedidomusical = document.getElementById('pedidomusical_id').value;
    txthorarioprograma = document.getElementById('horarioprograma_id').value;
    txtnombrerecibe = document.getElementById('nombrerecibe_id').value;
    txtnombreenvia = document.getElementById('nombreenvia_id').value;
    txttextarea = document.getElementById('dedicatoria_id').value;
    txtlistaprogramacionmusical = document.getElementById('programasdelivery').value;

//}
    /*const expNumTelefono = /^\d{7,14}$/ // 7 a 14 numeros.
    const expLetras =/^[a-zA-Z\ñ\Ñ\á\é\í\ó\ú\ü\Á\É\Í\Ó\Ú\s]{3,25}$/; // Letras, letras especiales, espacio
    const expRegCorreo= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    const expRegpassword =/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;    // 6 a 15 digitos. /^[0-9a-zA-Z\-\_\*\.\:\+]{6,20}$/; */


