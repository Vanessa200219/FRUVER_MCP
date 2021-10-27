<?php  

		include '../Conexion/Conexion.php';
		$sentencia = $bd->query("SELECT * FROM persona;");
		$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
	

	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Informacion</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../../CSSindex/indexPortada.css">
	<link rel="stylesheet" href="../CSSCuenta/cuentas.css">
</head>
<body>

    
    <!-- MENU -->
   <section id="header">
    <div class="header">
      <div class="nav-bar">
        <div class="brand">
          <a href="../../indexPortada.php">
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
            <li><a href="" data-after="Contactos">Contactos</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- FIN DE MENU -->   
	<center>
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
        

		

	</center>
	<script src="../../indexJava/app.js"></script>
</body>
</html>