<?php 



if (!isset($_POST['oculto'])) {
    exit();
}

include '../Conexion/Conexion.php';

    $nombre=$_POST['Nombres'];
    $apellido=$_POST['Apellidos'];
    $tipodedocumento=$_POST['TipodeDocumento'];
    $numerodedocumento=$_POST['NumerodeDocumento'];
    $telefono=$_POST['Telefono'];
    $email=$_POST['CorreoElectronico'];
    $sexo=$_POST['Sexo'];
    $contrasena=md5($_POST['Contrasena']);
    $rol=2;


    $sentencia = $bd->prepare("INSERT INTO persona(Nombres,Apellidos,TipodeDocumento,NumerodeDocumento,Telefono,CorreoElectronico,Sexo,Contrasena,id_rol) VALUES (?,?,?,?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$nombre,$apellido,$tipodedocumento,$numerodedocumento,$telefono,$email,$sexo,$contrasena,$rol]);

    if ($resultado === TRUE) {
		echo "Insertado correctamente";
	}else{
		echo "Error";
	}

?>