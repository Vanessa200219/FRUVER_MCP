<?php 



if (!isset($_POST['oculto'])) {
    exit();
}

include '../../Conexion/Conexion.php';

try {

    $nombre=$_POST['txtNombres'];
    $apellido=$_POST['txtApellidos'];
    $tipodedocumento=$_POST['txtTipodeDocumento'];
    $numerodedocumento=$_POST['txtNumerodeDocumento'];
    $telefono=$_POST['txtTelefono'];
    $email=$_POST['txtCorreoElectronico'];
    $sexo=$_POST['txtSexo'];
    $contrasena=md5($_POST['txtContrasena']);
    $rol=4;


    $sentencia = $bd->prepare("INSERT INTO persona(Nombres,Apellidos,TipodeDocumento,NumerodeDocumento,Telefono,CorreoElectronico,Sexo,Contrasena,id_rol) VALUES (?,?,?,?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$nombre,$apellido,$tipodedocumento,$numerodedocumento,$telefono,$email,$sexo,$contrasena,$rol]);

} catch(PDOException) {
    echo '<script language="javascript">alert("Error .... El documento ya existe");window.location.href="../index.php"</script>';
}


if ($resultado === TRUE) {
    header('Location: ../Vista/Proveedor.php?id='.$numerodedocumento);
    // header('Location: ../Vista/iniciarsesion.php');
}else{
	echo '<script language="javascript">alert("Error .... Al ingresar datos");window.location.href="../index.php"</script>';
    // header('Location:../Vista/Error.php');
}

