<!DOCTYPE html>
<html  lang="es">
<head>
    <title>Delivery</title>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type="text/css" href="css/estilosm.css"  >-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--Iconos-->
    <script src="https://kit.fontawesome.com/39014c33dc.js" crossorigin="anonymous"></script>

      <style>
         .color{
            background-color: #81BAF3;
         }
         .color1{
            background-color: #A6DFED;
         }
         .dedicatira{
          height: auto !important;
          width: 200px !important;
         }
         .table{
          width:100% !important;
          height: 700px !important;
         }


         /*Modal propio 
         .modal{
           position: fixed;
           width: 100%;
           height: 100vh;
           background: rgba(0,0,0,0.81);
           display: block;
         }
         .bodyModal{
           width: 100%;
           height: 100%;
           display: -webkit-inline-flex;
           display: -moz-inline-flex;
           display: -ms-inline-flex;
           display: -moz-inline-box;
           display: inline-flex;
           justify-content: center;
           align-items: center;
         }
         .form_add_estado{
           width: 420px;
           text-align: center;
         }
         #form_add_estado{
           width: 420px;
           text-align: center;
         }*/
      </style>
</head>    
<body>
  <header class="container-fluit">
      <h2 class="text-center"><b>Delivery musical</b></h2>
  </header>
      
    <div class="row  bg-light">
         <div class="col-md-12">
      <?php 
            $ct = new Control();
                          //  $contarpaginas =  $ct->contarFilasDelivery();
                           // echo "<h2>". $contarpaginas ."</h2>";                 
                        ?>
              <form class="row g-3" action="?c=estadoDeivery"  method="post">
                <div class="col-auto  m-2">
                  <label for="staticEmail2" class="visually-hidden">Seleccione estado: </label>
                    <select class="form-select" aria-label="Default select example " name ="estado">
                      <option selected>Todo</option>
                      <option value="Atendido" >Atendido</option>
                      <option value="Pendiente">Pendiente</option>
                    </select>
                    <label for="staticEmail3" class="visually-hidden" style=" margin-left:25px">Seleccione programa: </label>
                      <select class="form-select" aria-label="Default select example " name ="programa">
                          <option value="Seleccionar programa...">Seleccionar programa...</option> 
                          <option value="Tus mañanas con la U">Tus mañanas con la U. </option> 
                          <option value="Receso musical">Receso musical. </option>
                          <option value="Estación nocturna">Estación nocturna. </option> 
                          <option value="Soundtracks">Soundtracks. </option> 
                      </select>
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                </div>
              </form>
<!--w3-responsive-->
              <div class="  " >
                <!--<span class="w3-right w3-opacity"></span>Letra a la esquina superior derecha -->
                
                    <table class="table w3-responsive ">
                            <thead>
                              <tr class="w3-blue-grey ">
                                  <th  scope="col color">ID</th>
                                  <th  scope="col ">FECHA</th>
                                  <th scope="col ">ESATDO</th>
                                  <th scope="col">ACCIONES</th>
                                  <th scope="col ">NOMBRE QUIÉN ENVÍA</th>
                                  <th scope="col ">PEDIDO MUSICAL</th>
                                  <th scope="col " >PROGRAMA</th>
                                  <th scope="col ">NOMBRE QUIÉN RECIBE</th>
                                  <th scope="col">FECHA QUE REALIZÓ EL PEDIDO</th>
                                  <th class="dedicatira " scope="col">DEDICATORIA</th>  
                              </tr>
                            </thead>
                            <?php 
                                $arraySolicitudes =  $ct->todosLosEstados();  
                                    foreach ($arraySolicitudes as $rs) { ?>
                                      <tbody>
                                        <tr class="color1">
                                          <td class="w3-center "> <?php echo  $rs->id_delivery ?> </td>
                                          <td class="w3-center "> <?php echo  $rs->FECHA_DLV ?> </td>
                                          <td class="w3-center "> <?php echo $rs->ESTADO_DLV ?> </td>
                                          <td class="w3-center "><a class="editarestado" product="<?php echo  $rs->id_delivery ?>"name="estado" data-bs-toggle="modal"  data-bs-target="#modaleditarestado" href="#"><i class="fas fa-edit"></i></a></td>
                                          <td class="w3-center"> <?php echo $rs->NOMBRE_ENVIA_DLV ?> </td>
                                          <td class="w3-center"> <?php echo $rs->PEDIDOMUSICAL_DLV ?> </td>
                                          <td class="w3-center"> <?php echo $rs->PROGRAMA_DLV ?> </td>
                                          <td class="w3-center"> <?php echo $rs->NOMBRE_RECIBE_DLV ?> </td>
                                          <td class="w3-center"> <?php echo $rs->FECHA_HORA_PEDIDO_DLV ?> </td>  
                                          <td class="dedicatira"><p> <?php echo $rs->DEDICATORIA_DLV ?></p> </td>         
                                        </tr>  
                                      </tbody>
                                  <?php 
                                    }  ?>
                                     <hr class="w3-clear ">
                          </table>
                         
                      </div>
                          

                                <!-- 
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item "> 
                          <a class="page-link" href="../solicitudes/solicitudesdelivery.php?pagina=<?php // echo $_GET['pagina']-1 ?>">Anterior</a>
                        </li>
                        <?php // for($i=0;$i<$contarpaginas;$i++){ ?>
                        <li class="page-item <?php // echo $_GET['pagina']==$i+1 ? 'active': '' ?> "> 
                          
                            <a class="page-link" href="../solicitudes/solicitudesdelivery.php?pagina=<?php // echo $i+1 ?> ">
                            <?php // echo $i+1 ?>
                          </a>

                        </li>
                        <?php // } ?>

                        <li class="page-item <?php // echo $_GET['pagina']>=$contarpaginas ? 'disabled': '' ?>">
                          <a class="page-link" href="../solicitudes/solicitudesdelivery.php?pagina=<?php // echo $_GET['pagina']+1 ?>">Siguiente</a>
                        </li>
                      </ul>
                  </nav>  
                        -->


             


            <div class="modal fade" id="modaleditarestado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" >
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EDITAR ESTADO</h5>
                    <button type="button" class="fas fa-window-close" data-bs-dismiss="modal" aria-label="Close" style="border:none;"></button>
                  </div>
                  <div class="modal-body">
                    <form action="?c=updateEstadoCtl"  method="post">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">ID:</label>
                          <input type="text" class="form-control text-center" name="idnumber" id="idnumber" readonly> 
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">CAMBIAR ESTADO:</label>
                              <select class="form-select" aria-label="Default select example " name ="estadolist" id="estadolist">
                                <option value="Pendiente">Pendiente</option>
                                <option value="Atendido" >Atendido</option>
                              </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>


              <!-- Jquery -->
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <!-- Option 1: Bootstrap Bundle with Popper -->
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
              <!-- Option 2: Separate Popper and Bootstrap JS -->
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
            






              <script type="text/javascript">
                    //ESTE SCRIPT PERMITE QUE SALGA EL ID EN EL MODAL PARA LUEGO EDITAR SU ESTADO
                      $(document).ready(function(){
                          $('.editarestado').click(function(e){//Extraer id
                            e.preventDefault();
                            var id = $(this).attr('product');
                              //$('.modaleditarestado').fadeIn();
                              $('#idnumber').prop({'value': id});
                          });
                      });
              </script>

  </body>
</html>

