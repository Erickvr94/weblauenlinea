<?php 
//session_start();

        require_once("../modelos/delivery_model.php");

    class Control{
        
        public $controlDelivery;
        

        public function __construct(){
            $this->controlDelivery = new Delivery_model();
            
        }
        public function index(){  
            require_once("../view/deliverymusical.php");
        }
        public function solicitudesDelivery(){  
            require_once("../view/solicitudes.php");
        }
        public function solicitudesEstadoDelivery(){  
            require_once("../view/solicitudesestado.php");
        }
        public function solicitudesEstadoProgramasDelivery(){  
            require_once("../view/solicitudesestadoprogramas.php");
        }
     

        

   

        
       public function PedidoDelivery(){
            if(isset($_POST['listaprogramacionmusical'])&&($_POST['pedidomusical'])&&($_POST['nombrerecibe'])&&($_POST['nombreenvia'])&&($_POST['horarioprograma'])&&($_POST['fecha'])&&($_POST['textarea'])){
                $delivery_pedido = new Delivery_model();              

                date_default_timezone_set('America/Bogota');
                $DateAndTime = date('Y-m-d H:i:s a', time());
                
                $estado = "Pendiente";
       
                $delivery_pedido->setFechaDelivery($_POST['fecha']);
                $delivery_pedido->setPedidoMusicalDelivery($_POST['pedidomusical']);
                $delivery_pedido->setProgramaDelivery($_POST['listaprogramacionmusical']);
                $delivery_pedido->setHorarioProgramaDelivery($_POST['horarioprograma']);
                $delivery_pedido->setNombreEnviaDelivery($_POST['nombreenvia']);
                $delivery_pedido->setNombreRecibeDelivery($_POST['nombrerecibe']);
                $delivery_pedido->setDedicatoriaDelivery($_POST['textarea']);
                $delivery_pedido->setFechaHoraPedidoDelivery( $DateAndTime);
                $delivery_pedido->setEstadoDelivery($estado);

                $arrayDelivery= $this->controlDelivery->RegistrarDelivery($delivery_pedido);               

                $delivery_pedido->setFechaDelivery("");
                $delivery_pedido->setPedidoMusicalDelivery("");
                $delivery_pedido->setProgramaDelivery("");
                $delivery_pedido->setHorarioProgramaDelivery("");
                $delivery_pedido->setNombreEnviaDelivery("");
                $delivery_pedido->setNombreRecibeDelivery("");
                $delivery_pedido->setDedicatoriaDelivery("");
                $delivery_pedido->setFechaHoraPedidoDelivery("");
                $delivery_pedido->setEstadoDelivery("");
                
		header("Location: ../index.html");
                //header("Location: ../configuracion/index.php");
           }else{
                header("Location: ../configuracion/index.php");
           }
        } 



        public function updateEstadoCtl(){ //Consultar usuario
                if(isset($_POST["idnumber"])&&isset($_POST["estadolist"])){
                    $id = $_POST["idnumber"]; $estado = $_POST["estadolist"];
                    $delivery_update = new Delivery_model();
                    $delivery_update->updateEstadoDelivery($id,$estado);
                    //header("Location: ../solicitudes/solicitudesdelivery.php");       
                    header("Location: ../solicitudes/index.php");
                }else{
                  echo "<h1> no se pudieron pasar los valores </h1>";
                }               
           
        }



        /*public function estadoDeivery(){ 
            $estado1 = $_POST['estado'];
            $ct = new Control();
            if($estado1=="Pendiente" ){
                $Estado  =$this->controlDelivery->getOrdenarEstadoDelivery($estado1);
                $ct->solicitudesEstadoDelivery();
            }
            else if($estado1=="Atendido" ){
                $Estado  =$this->controlDelivery->getOrdenarEstadoDelivery($estado1);
                $ct->solicitudesEstadoDelivery();
            }
            else if($estado1=="Todo" ){
                //header("Location: ../solicitudes/solicitudesdelivery.php"); 
                header("Location: ../solicitudes/index.php");
            }
            return $Estado;
        } */

        public function estadoIndivicualDeivery(){ 
            $estado1 = $_POST['estado'];
            $ct = new Control();
            if($estado1=="Pendiente" ){
                $Estado  =$this->controlDelivery->getOrdenarEstadoDelivery($estado1);
                $ct->solicitudesEstadoDelivery();
            }
            else if($estado1=="Atendido" ){
                $Estado  =$this->controlDelivery->getOrdenarEstadoDelivery($estado1);
                $ct->solicitudesEstadoDelivery();
            }
            else if($estado1=="Todo" ){
                //header("Location: ../solicitudes/solicitudesdelivery.php"); 
                header("Location: ../solicitudes/index.php");
            }
            return $Estado;
        }



       

        
        public function estadoDeivery(){  //Recibe paámetros de búsqueda de las solicitudes del delivery
            $estado1 = $_POST['estado'];
            $programatxt = $_POST['programa'];

            $programaselec ="Seleccionar programa...";
            $programa1 ="Tus mañanas con la U";
            $programa2 ="Receso musical";
            $programa3 ="Estación nocturna"; 
            $programa4 ="Soundtracks"; 

            $pendiente ="Pendiente";
            $atendido = "Atendido";
            $ct = new Control();
            if(($estado1==$pendiente)&&($programatxt==$programaselec)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoDelivery($estado1);
                $ct->solicitudesEstadoDelivery();
            }
            else if(($estado1==$atendido)&&($programatxt==$programaselec)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoDelivery($estado1);
                $ct->solicitudesEstadoDelivery();
            }
            else if(($estado1==$pendiente)&&( $programatxt==$programa1)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoProgramasDelivery($estado1,$programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            else if(($estado1==$atendido)&&($programatxt ==$programa1)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoProgramasDelivery($estado1,$programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            else if(($estado1==$pendiente)&&($programatxt ==$programa2)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoProgramasDelivery($estado1,$programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            else if(($estado1==$atendido)&&($programatxt ==$programa2)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoProgramasDelivery($estado1,$programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            else if(($estado1==$pendiente)&&($programatxt ==$programa3)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoProgramasDelivery($estado1,$programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            else if(($estado1==$atendido)&&($programatxt ==$programa3)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoProgramasDelivery($estado1,$programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            else if(($estado1==$pendiente)&&($programatxt ==$programa4)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoProgramasDelivery($estado1,$programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            else if(($estado1==$atendido)&&($programatxt ==$programa4)){
                $Estado  =$this->controlDelivery->getOrdenarEstadoProgramasDelivery($estado1,$programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            elseif(($estado1=="Todo")&&(($programatxt ==$programa1)||($programatxt ==$programa2)||($programatxt ==$programa3)||($programatxt ==$programa4))){
                $Estado  =$this->controlDelivery->getOrdenarProgramasPorEstadoDelivery($programatxt);
                $ct->solicitudesEstadoProgramasDelivery();
            }
            else if($estado1=="Todo"){
                //header("Location: ../solicitudes/solicitudesdelivery.php"); 
                header("Location: ../solicitudes/index.php");
            }
            return $Estado;
        }



        public function contarFilasDelivery(){ 
            $Solicitudes  =$this->controlDelivery->consultaContarSolicitudes();
            return $Solicitudes;
        }



       public function todosLosEstados(){ 
                   //$reg_delivery = new Delivery_model();
                   $arraySolicitudes  =$this->controlDelivery->getSolicitudesDelivery();
                return $arraySolicitudes;
             }
            
        } 
    