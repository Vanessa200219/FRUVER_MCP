<?php 
	session_start();
	include_once '../Conexion/Conexion.php';
	$usuario = $_POST['usuario'];
	$contrasena = md5($_POST['contraseña']);
	$sentencia = $bd->prepare('SELECT * FROM persona WHERE 
								CorreoElectronico = ? AND Contrasena = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: ../Vista/iniciarsesion.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['Nombres'] = $datos->Nombres;
		header('Location: ../Vista/inicio.php');
	}
?>