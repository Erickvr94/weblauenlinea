<?php
class ConectarBD{
    public static function conexion(){
        try{
           $host ='mysql:host=localhost;port=3307;dbname=lauenlinea_db1';
            $userhost ='root';
            $pass='';
            $bd ='dbname=lauenlinea_db1';

		//$host ='mysql:host=bdz2u9qnz3rctkd8n8kx-mysql.services.clever-cloud.com;dbname=bdz2u9qnz3rctkd8n8kx';
//                $userhost ='u470hxtewb5rhnae';
  //              $pass='hvQ3LHqI07fkUvUM286H';
        
                $conn = new PDO($host,$userhost,$pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //$conn->exec("SET CHARACTER SET utf8");
               
        }catch(Exception $e){
            die('Error'.$e->GetMessage());
            echo 'Linea del error ' .$e->getLine();
        }
        return $conn;
    }
    
}
?>

