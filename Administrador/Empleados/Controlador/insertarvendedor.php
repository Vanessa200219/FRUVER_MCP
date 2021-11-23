<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include '../model/conexion.php';

	try {

	$CarnetdeTrabajo = $_POST['txtCarnetdeTrabajos'];
	$NumerodeDocumento = $_POST['txtNumerodeDocumentos'];
	$SueldoBasico = $_POST['txtSueldoBasico'];
	$Direccion = $_POST['txtDireccion'];
    $Ciudad = $_POST['txtCiudad'];
    $Estrato=$_POST['txtEstrato'];

    $sentencia = $bd->prepare("INSERT INTO vendedores(CarnetdeTrabajo,NumerodeDocument,SueldoBasico,Direccion,Ciudad,Estrato) VALUES (?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$CarnetdeTrabajo,$NumerodeDocumento,$SueldoBasico,$Direccion,$Ciudad,$Estrato]);


} catch(PDOException) {
	// echo '<script language="javascript">alert("Error al ingresar datos");window.location.href="../index.php"</script>';
    
}

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: ../Vista/empleado.php');
	}else{
		echo "Error";
	}
?>