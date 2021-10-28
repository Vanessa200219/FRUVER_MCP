<?php 



if (!isset($_POST['oculto'])) {
    exit();
}

include '../Conexion/Conexion.php';

try {

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

} catch(PDOException $e) {
    //$e = header('Location:insertar.php');
}


if ($resultado === TRUE) {
    //echo "Insertado correctamente";
    header('Location: ../Vista/inicio.php');
}else{
    //echo "Error";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSSCuenta/Error.css">
    <title>Error</title>
</head>
<body>

    <div class="brand">
          <a href="../../Portada.php">
            <img src="../../imgindex/logo.png" alt="">
          </a>
        </div>

    <div>
        <h1>Error Al Ingresar los datos vuelva a intentarlo</h1> 
    </div>
    

    <div>
        <a class="volver" href="../Vista/registrar.php">Volver</a>
        <a class="inicio" href="../../Portada.php">Inicio</a>
    </div>
</body>
</html>