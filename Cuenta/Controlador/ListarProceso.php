<?php
session_start();
$usu = $_SESSION['NumerodeDocumento'];


	if (!isset($_SESSION['NumerodeDocumento'])) {

		header('Location: ../Vista/iniciarsesion.php');
    
    }elseif(isset($_SESSION['NumerodeDocumento'])){
        
		include_once( '../Conexion/Conexion.php');

        
		if (isset($_POST['btn2'])) {
			
		    $statement = $bd->prepare("SELECT * FROM persona WHERE NumerodeDocumento = $usu");
	        $statement->execute();
            
	        //print_r($datos); 
            
    
            
            while ($key=$statement->fetch()) {
            

            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    
    <link rel="stylesheet" href="../../CSSindex/index.css">
	<link rel="stylesheet" href="../CSSCuenta/estilo.css">
</head>
<body>

<!-- MENU -->
    <section id="header">
    <div class="header">
    <div class="brand">
          <a href="inicio.php">
            <img src="../../imgindex/logo.png" alt="">
          </a>
        </div>
      <div class="nav-bar">
        
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="inicio.php" data-after="Inicio">Inicio</a></li>
            <li><a href="#services" data-after="Informacion">Informacion</a></li>
            <li><a href="#about" data-after="Productos">Productos</a></li>
            <li><a href="#contact" data-after="Contactos">Contactos</a></li>
            <li><a href="../Controlador/CerrarSesion.php" data-after="Inicio sesion/Registrarse">CerrarSesion</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- FIN DE MENU -->   


<h3 class="tittle">Informacion Personal</h3>
<section class="contenedor">

<table class="information">
			<tr>
				<td id="label">Nombres </td>
				<td id="input">
					
						<?php echo $key['Nombres']; ?>
					
				</td>
			</tr>


            <tr>
				<td id="label">Apellidos </td>
				<td id="input">
					
						<?php echo $key['Apellidos']; ?>
						
				</td>
			</tr>


            <tr>
				<td id="label">Tipo de Documento </td>
				<td id="input">
					
						<?php echo $key['TipodeDocumento']; ?>
						
				</td>
			</tr>


            <tr>
				<td id="label">Numero de Documento </td>
				<td id="input">
					
						<?php echo $key['NumerodeDocumento']; ?>
						
				</td>
			</tr>


            <tr>
				<td id="label">Telefono </td>
				<td id="input">
					
						<?php echo $key['Telefono']; ?>
					
				</td>
			</tr>


            <tr>
				<td id="label">Correo Electronico </td>
				<td id="input">
					
						<?php echo $key['CorreoElectronico']; ?>
						
				</td>
			</tr>


            <tr>
				<td id="label">Sexo </td>
				<td id="input">
					
						<?php echo $key['Sexo']; ?>
						
				</td>
			</tr>


            <tr>
				<td id="label">Contraseña </td>
				<td id="input">
					
					<a class="editar" href="../Vista/CambiarContraseña.php?id=<?php echo $key['NumerodeDocumento']; ?>">Cambiar Contraseña</a>
						
				</td>
			</tr>


            <tr>
					<td><a class="editar" href="../Vista/Editar.php?id=<?php echo $key['NumerodeDocumento']; ?>">Editar Perfil</a></td>
					
			</tr>

	</table>


            <?php
            }}
            }
            ?>
    
    <script src="../../indexJava/app.js"></script>
</body>
</html>
