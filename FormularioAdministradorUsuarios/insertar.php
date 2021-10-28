<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'model/conexion.php';

	$nombres = $_POST['txtNombres'];
	$apellidos = $_POST['txtApellidos'];
	$tipodoc = $_POST['txtTipodeDocumento'];
	$numDoc = $_POST['txtNumerodeDocumento'];
	$telefono = $_POST['txtTelefono'];
    $correo = $_POST['txtCorreoElectronico'];
    $sexo=$_POST['txtSexo'];
	$contrasena=md5($_POST['txtContrasena']);
	$id_rol = $_POST['txtRol'];

    $sentencia = $bd->prepare("INSERT INTO persona(Nombres,Apellidos,TipodeDocumento,NumerodeDocumento,Telefono,CorreoElectronico,Sexo,Contrasena,id_rol) VALUES (?,?,?,?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$nombres,$apellidos,$tipodoc,$numDoc,$telefono,$correo,$sexo,$contrasena,$id_rol]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>