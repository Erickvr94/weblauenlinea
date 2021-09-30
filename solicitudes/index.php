
<?php  
	require_once("../controlador/delivery_control.php");
	require_once("../configuracion/conexiondbproyecto.php"); 
	$controller = new control();
	if(!isset($_REQUEST['c'])){
		$controller->solicitudesDelivery();
	}else{
		$action = $_REQUEST['c'];
		call_user_func(array($controller,$action));
	}	
?>  
