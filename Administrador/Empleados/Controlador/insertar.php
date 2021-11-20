<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include '../model/conexion.php';

	try {

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


} catch(PDOException) {
	echo '<script language="javascript">alert("Error .... El documento ya existe");window.location.href="index.php"</script>';
    
}

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: ../index.php');
	}else{
		echo "Error";
	}
?>