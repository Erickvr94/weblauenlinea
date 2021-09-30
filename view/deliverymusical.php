<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <style type="text/css">

        .contenedor1{
            padding-left: 4%;
            padding-right: 4%;
        }
        .fuentedelivery1{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 70px;
            color: #002547;
            padding-left: 4%;
        }
        label{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 18px;
            color: #002322;
        }
        #logodelivery{
            float:right;
            margin-top: -80px;
            width: 23%;
            z-index: 99;
            margin-right: 8%;
        }
        #franja{
            width: 100%;
        }
        input{
            margin-top: 1%;
            margin-bottom: 1%;
        }
        input[type=text]{
            font-size: 17px;
            color: #002322;
            width: 85%;
        }
        input[type=text]{
            border-bottom-color: #003779;
	        border-radius: 2px;
            border-top: none;
            border-left: none;
            border-right: none;
        }
        /*input[type=button]{
            font-size: 17px;
            width: 20%;
            text-align: center;
            margin-top: 1%;
            margin-bottom: 1%;
        } */
        .botonenviar{
            font-size: 17px;
            width: 20%;
            text-align: center;
            margin-top: 1%;
            margin-bottom: 1%;
        }        
        select{
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5px;
            font-size: 18px;
            color: #002322;
            border-color:#003779;
            border-width:2px;
            width: 72% !important;
        }
        textarea{
            font-size: 17px;
            color: #002322;
            width: 75%;
            border-color:#003779;
            border-width:2px;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5px;
            margin-top: 1%;
            margin-left: 8%;
            margin-right: 8%;
        }
        h1{
            margin-top: 2%;
        }



    </style>

    <title>Delivery Musical</title>
</head>
    <body>
        <div class="container-fluid bg-white" style=" padding: 0px 0px;">       
            <img id="franja"  src="../imagenes/imgdelivery/franja de arriba-01.png" alt="">
                <div class="contenedor1 bg-white">
                        <h1 class="fuentedelivery1">Delivery Musical</h1>
                        <img id="logodelivery" src="../imagenes/imginicio/delivery-motito-01.png" alt="logodelivery">

                                                                                            <!-- action="?c=PedidoDelivery"  method="post" -->
                        <form class="bg-white" id="formulariodelivery" name="formulariodelivery" action="?c=PedidoDelivery"  method="post" >
                                <div class="form-group row">
                                    <label for="" class="fuentedelivery2 col-sm-2 col-form-label">Fecha para el saludo: </label>
                                    <div class="col-sm-10">
                                        <input  type="date" id="fecha_id" name="fecha" value="2021-08-01" min="2020-01-01" max="2040-12-31">  
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="fuentedelivery2 col-sm-2 col-form-label">Pedido musical: </label>
                                    <div class="col-sm-10">
                                        <input type="text" id="pedidomusical_id" name="pedidomusical"  placeholder="Pedido musical">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="fuentedelivery2 col-sm-4 col-form-label">Selecciona el programa para el que realiza el pedido o dedicatoria: </label>
                                    <div class="col-sm-8">
                                        <select id="programasdelivery" name="listaprogramacionmusical" class="form-control" onchange="ObjetoSeleccionado();">
                                            <option value="Seleccionar programa...">Seleccionar programa...</option> 
                                            <option value="Tus mañanas con la U">Tus mañanas con la U. </option> 
                                            <option value="Receso musical">Receso musical. </option>
                                            <option value="Estación nocturna">Estación nocturna. </option> 
					                        <option value="Soundtracks">Soundtracks. </option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="textInput" class="fuentedelivery2 col-sm-2 col-form-label">Horario de programa: </label>
                                    <div class="col-sm-10">
                                        <input  type="text" id="horarioprograma_id" name="horarioprograma" placeholder="Seleccione un programa para mostrar el horario" readonly> <!-- disabled = true -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="fuentedelivery2 col-sm-2 col-form-label">Nombre de quién recibe: </label>
                                    <div class="col-sm-10">
                                        <input type="text" id="nombrerecibe_id" name="nombrerecibe" placeholder="Nombre de quién recibe">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="fuentedelivery2 col-sm-2 col-form-label">Nombre de quién envía: </label>
                                    <div class="col-sm-10">
                                        <input type="text" id="nombreenvia_id" name="nombreenvia" placeholder="Nombre de quién envía">            
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="fuentedelivery2 col-sm-2 col-form-label">Indique dedicatoria: </label>
                                    <div class="col-sm-8">
                                        <textarea id="dedicatoria_id" name="textarea" rows="4" cols="50"></textarea>       
                                    </div>
                                </div>

                               

                                <div class="form-group row text-center">
                                    <div class="col-sm-12">
                                        <!-- Button trigger modal -->
                                        <button id="btnenviar1" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Enviar
                                        </button>

                                        <div class="modal" id="exampleModal" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4 class="text-center fuentedelivery2">¿Desea guardar su pedido?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary botonenviar" data-bs-dismiss="modal">Cancelar</button>
                                                        <button id="btnenviar2" type="submit" class="btn btn-primary botonenviar">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                         <!--<input class="btn btn-success" type="submit" value="Enviar">-->
                                        <!--button type="submit" class="btn btn-primary">Sign in</button>-->
                                    </div> 

                                    
                                </div>


                                
                                
                        </form>
                    
                </div>
            <img id="franja"  src="../imagenes/imgdelivery/franja de arriba-01.png" alt="">
        </div>


        

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  

    
    


        <script type="text/javascript">
            function ObjetoSeleccionado()
            {
                /*Deshabilitar input de horario*/
                /*var textInputHorario = document.getElementById('textInput');
                textInputHorario.disabled = true;*/

                var seleccioneprograma = 'Seleccionar programa..';
                var tusmananasconlau = 'Lunes a Viernes de 08h00 - 12h00';
                var recesomusical = 'Lunes a Viernes de 12h00 - 15h00';
                var estacionnocturna = 'Domingos a jueves 19h00 a 00h00';
                var soundtracks = 'Sábados y domingos de 14h00 a 16h00';

                var programaselec ="Seleccionar programa...";
                var programa1 ="Tus mañanas con la U";
                var programa2 ="Receso musical";
                var programa3 ="Estación nocturna"; 
                var programa4 ="Soundtracks"; 

                /* Para obtener el valor */
                var cod = document.getElementById("programasdelivery").value;
                if(cod == programaselec){ 
                    document.formulariodelivery.horarioprograma_id.value = seleccioneprograma;
                }if(cod == programa1){ 
                    document.formulariodelivery.horarioprograma_id.value = tusmananasconlau;
                }if(cod == programa2){ 
                    document.formulariodelivery.horarioprograma_id.value = recesomusical;
                }if(cod == programa3){ 
                    document.formulariodelivery.horarioprograma_id.value = estacionnocturna;
                }if(cod == programa4){ 
                    document.formulariodelivery.horarioprograma_id.value = soundtracks;
                } 


                /* Para obtener el texto */
                var combo = document.getElementById("programasdelivery");
                var selected = combo.options[combo.selectedIndex].text;
            }
    
        </script>


        <!--<script src="../assets/scripts/js/formulariodeliveryvalidacion.js"></script>-->
       


        
    </body>
</html>
