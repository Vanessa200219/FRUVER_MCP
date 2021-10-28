<?php  
	session_start();
	if (!isset($_SESSION['Nombres'])) {
		header('Location: iniciarsesion.php');
	}elseif(isset($_SESSION['Nombres']))
	
	{
		include '../Conexion/Conexion.php';
		$sentencia = $bd->query("SELECT * FROM persona WHERE CorreoElectronico='".$_POST['usuario']."' AND Contrasena='".$_POST['contraseña']."'") or die(mysql_error());
		$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
	}else{
		echo "Error";
	}


	
?>
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Informacion</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../../CSSindex/indexPortada.css">
	<link rel="stylesheet" href="../CSSCuenta/estilo.css">
</head>
<body>

    
    <!-- MENU -->
   <section id="header">
    <div class="header">
      <div class="nav-bar">
        <div class="brand">
          <a href="../Vista/inicio.php">
            <img src="../../imgindex/logo.png" alt="">
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="" data-after="Inicio">Inicio</a></li>
            <li><a href="" data-after="Productos">Productos</a></li>
            <li><a href="" data-after="Informacion">Ayuda</a></li>
            <li><a href="" data-after="Contactos">Informacion</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- FIN DE MENU -->   



<section>
<div></div>
</section>


<h3 class="tittle">Informacion Personal</h3>
<section class="contenedor">


	<table class="information">
			<tr>
				<td id="label">Nombres </td>
				<td id="input">
					<?php 
						foreach ($persona as $dato) {
					?>
						<?php echo $dato->Nombres; ?>
					
					<?php
						}
					?>
				</td>
			</tr>


			<tr>
				<td id="label">Apellidos </td>
				<td id="input">
					<?php 
						foreach ($persona as $dato) {
					?>
						<?php echo $dato->Apellidos; ?>
					
					<?php
						}
					?>
				</td>
			</tr>

			<tr>
				<td id="label">Tipo de Documento </td>
				<td id="input">
					<?php 
						foreach ($persona as $dato) {
					?>
						<?php echo $dato->TipodeDocumento; ?>
					
					<?php
						}
					?>
				</td>
			</tr>


			<tr>
				<td id="label">Numero de Documento </td>
				<td id="input">
					<?php 
						foreach ($persona as $dato) {
					?>
						<?php echo $dato->NumerodeDocumento; ?>
					
					<?php
						}
					?>
				</td>
			</tr>


			<tr>
				<td id="label">Telefono </td>
				<td id="input">
					<?php 
						foreach ($persona as $dato) {
					?>
						<?php echo $dato->Telefono; ?>
					
					<?php
						}
					?>
				</td>
			</tr>

			<tr>
				<td id="label">Correo Electronico </td>
				<td id="input">
					<?php 
						foreach ($persona as $dato) {
					?>
						<?php echo $dato->CorreoElectronico; ?>
					
					<?php
						}
					?>
				</td>
			</tr>


			<tr>
				<td id="label">Sexo </td>
				<td id="input">
					<?php 
						foreach ($persona as $dato) {
					?>
						<?php echo $dato->Sexo; ?>
					
					<?php
						}
					?>
				</td>
			</tr>

			<tr>
				<td id="label">Contraseña </td>
				<td id="input">
					<?php 
						foreach ($persona as $dato) {
					?>
						<?php echo $dato->Contrasena; ?>
					
					<?php
						}
					?>
				</td>
			</tr>

			<tr>
				<?php 
						foreach ($persona as $dato) {
				?>
					<td><a class="editar" href="Editar.php?id=<?php echo $dato->NumerodeDocumento; ?>">Editar</a></td>
					<td><a class="eliminar" href="../Controlador/Eliminar.php?id=<?php echo $dato->NumerodeDocumento; ?>">Eliminar</a></td>
				<?php
					}
				?>
			</tr>

	</table>
</section>










  
	<!-- <center>
		<div class="div__firmts">
		<h3 class="Text_center">Mis Datos</h3>
		<table class="table__1">
			<tbody>
			<tr class="td__tittle">
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Tipo de Documento</td>
				<td>Numero de Documento</td>
				<td>Telefono</td>
				<td>Email</td>
				<td>Sexo</td>
				<td>Contraseña</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
			</tbody>
			<?php 
				foreach ($persona as $dato) {
					?>
					<tr class="content">
						<td><?php echo $dato->Nombres; ?></td>
						<td><?php echo $dato->Apellidos; ?></td>
						<td><?php echo $dato->TipodeDocumento; ?></td>
						<td><?php echo $dato->NumerodeDocumento; ?></td>
						<td><?php echo $dato->Telefono; ?></td>
						<td><?php echo $dato->CorreoElectronico; ?></td>
						<td><?php echo $dato->Sexo; ?></td>
						<td><?php echo $dato->Contrasena; ?></td>
						<td><a class="editar" href="Editar.php?id=<?php echo $dato->NumerodeDocumento; ?>">Editar</a></td>
						<td><a class="eliminar" href="../Controlador/Eliminar.php?id=<?php echo $dato->NumerodeDocumento; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>
		</div>
        

		

	</center> -->
	<script src="../../indexJava/app.js"></script>
</body>
</html>