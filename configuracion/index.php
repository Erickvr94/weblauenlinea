
<?php  
	require_once("../controlador/delivery_control.php");
	require_once("conexiondbproyecto.php"); 
	$controller = new control();
	if(!isset($_REQUEST['c'])){
		$controller->index();
	}else{
		$action = $_REQUEST['c'];
		call_user_func(array($controller,$action));
	}	
?>  
