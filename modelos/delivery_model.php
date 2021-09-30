<?php
     class Delivery_model{
        private $db;
        private $delivery;

        private $iddelivery;
        private $fechadelivery;
        private $pedidomusicaldelivery;
        private $programadelivery;
        private $horarioprogramadelivery;
        private $nombreenviadelivery;
        private $nombrerecibedelivery;
        private $dedicatoriadelivery;
        private $fechahorapedidodelivery;
        private $estadodelivery;

            public function __construct(){ //conexion a la BD
                require_once("../configuracion/conexiondbproyecto.php");
                $this->db = ConectarBD::conexion();
                $this->delivery = array();
            }

            public function getIdDelivery(){
                return $this->iddelivery;
            }
            public function getFechaDelivery(){
                return $this->fechadelivery;
            }
            public function getPedidoMusicalDelivery(){
                return $this->pedidomusicaldelivery;
            }
            public function getProgramaDelivery(){
                return $this->programadelivery;
            }
            public function getHorarioProgramaDelivery(){
                return $this->horarioprogramadelivery;
            }
            public function getNombreEnviaDelivery(){
                return $this->nombreenviadelivery;
            }
            public function getNombreRecibeDelivery(){
                return $this->nombrerecibedelivery;
            }
            public function getDedicatoriaDelivery(){
                return $this->dedicatoriadelivery;
            }
            public function getFechaHoraPedidoDelivery(){
                return $this->fechahorapedidodelivery;
            }
            public function getEstadoDelivery(){
                return $this->estadodelivery;
            }




            public function setIdDelivery($iddelivery){
                $this->iddelivery=$iddelivery;
            }
            public function setFechaDelivery($fechadelivery){
                $this->fechadelivery=$fechadelivery;
            }
            public function setPedidoMusicalDelivery($pedidomusicaldelivery){
                $this->pedidomusicaldelivery=$pedidomusicaldelivery;
            }
            public function setProgramaDelivery($programadelivery){
                $this->programadelivery=$programadelivery;
            }
            public function setHorarioProgramaDelivery($horarioprogramadelivery){
                $this->horarioprogramadelivery=$horarioprogramadelivery;
            }
            public function setNombreEnviaDelivery($nombreenviadelivery){
                $this->nombreenviadelivery=$nombreenviadelivery;
            }
            public function setNombreRecibeDelivery($nombrerecibedelivery){
                $this->nombrerecibedelivery=$nombrerecibedelivery;
            }
            public function setDedicatoriaDelivery($dedicatoriadelivery){
                $this->dedicatoriadelivery=$dedicatoriadelivery;
            }
            public function setFechaHoraPedidoDelivery($fechahorapedidodelivery){
                $this->fechahorapedidodelivery=$fechahorapedidodelivery;
            }
            public function setEstadoDelivery($estadodelivery){
                return $this->estadodelivery = $estadodelivery;
            }





  
            public function RegistrarDelivery(Delivery_model $data){ //Registrar Delivery
                try{
                    $query = "insert into DELIVERY_DB (FECHA_DLV, PEDIDOMUSICAL_DLV, PROGRAMA_DLV, HORARIOPROGRAMA_DLV, NOMBRE_ENVIA_DLV, NOMBRE_RECIBE_DLV, DEDICATORIA_DLV, FECHA_HORA_PEDIDO_DLV, ESTADO_DLV)  
                    values(?,?,?,?,?,?,?,?,?)";
                    $this->db->prepare($query)->execute(array($data->fechadelivery, $data->pedidomusicaldelivery, $data->programadelivery, $data->horarioprogramadelivery,
                    $data->nombreenviadelivery, $data->nombrerecibedelivery, $data->dedicatoriadelivery, $data->fechahorapedidodelivery, $data->estadodelivery));
                
                }catch(Exception $e){
                    die($e->getMessage());
                }
            }



		//u794617481_lauenlinea_db1.delivery_db
            public function getSolicitudesDelivery(){ 
                $sql = "select * from DELIVERY_DB order by FECHA_HORA_PEDIDO_DLV DESC"; 
                $consulta = $this->db->query($sql);
                $queryAccept = $consulta->fetchAll(PDO::FETCH_OBJ);
                foreach($queryAccept as $rs){ 
                    $this->delivery[] = $rs; 
                }
                return $this->delivery;   
            }




            public function consultaContarSolicitudes(){
                $sql = "select * from DELIVERY_DB order by id_delivery DESC"; 
                $consulta = $this->db->query($sql);
                $consulta->fetchAll(PDO::FETCH_OBJ);

                $pedidos_por_página = 3;
                $totalfilasdb = $consulta->rowCount();
                echo  $totalfilasdb;
                $paginas =  $totalfilasdb/3;
                $paginas = ceil($paginas);
                echo   $paginas; 

               /* foreach($queryAccept as $rs){ 
                    $this->delivery[] = $rs; 
                }*/
                return $paginas;   
            }




            public function getOrdenarEstadoDelivery($estado){ //Consultar estados
                try{
                
                    $sql = "select * from DELIVERY_DB where ESTADO_DLV = '$estado' order by id_delivery DESC"; 
                    $consulta = $this->db->query($sql);
                    $queryAccept = $consulta->fetchAll(PDO::FETCH_OBJ);
                    foreach($queryAccept as $rs){ 
                        $this->delivery[] = $rs; 
                    }
                    return $this->delivery; 
                }catch(Exception $e){
                   die($e->getMessage());
                }   
            }



            public function getOrdenarProgramasPorEstadoDelivery($programa){ //Odenar por  programas 
                try{
                
                    $sql = "SELECT * FROM DELIVERY_DB WHERE PROGRAMA_DLV='$programa' "; 
                    $consulta = $this->db->query($sql);
                    $queryAccept = $consulta->fetchAll(PDO::FETCH_OBJ);
                    foreach($queryAccept as $rs){ 
                        $this->delivery[] = $rs; 
                    }
                    return $this->delivery; 
                }catch(Exception $e){
                   die($e->getMessage());
                }   
            }





            public function getOrdenarEstadoProgramasDelivery($estado,$programa){ //Consultar estados y programas
                  try{
    
                      $sql = "select * from DELIVERY_DB where ESTADO_DLV = '$estado' and PROGRAMA_DLV = '$programa' order by id_delivery DESC"; 
                      $consulta = $this->db->query($sql);
                      $queryAccept = $consulta->fetchAll(PDO::FETCH_OBJ);
                      foreach($queryAccept as $rs){ 
                          $this->delivery[] = $rs; 
                      }
                      return $this->delivery; 
                 }catch(Exception $e){
                      die($e->getMessage());
                  }   
              }



            
            public function updateEstadoDelivery($id,$estado){ //Actualizar estadi del Delivery
                  try{
                            $sql = "UPDATE DELIVERY_DB SET ESTADO_DLV = ? WHERE id_delivery = ?";
                            $consulta = $this->db->prepare($sql);
                            $resultado = $consulta->execute([$estado, $id]);
                            if( $resultado){
                                echo "<h1> Actualizado </h1>";
                            }
                            else{
                                echo "<h1> no se pudo realizar operación </h1>";
                              }     
               
                  }catch(Exception $e){
                      die($e->getMessage());
                  }   
              }
    } 
?>