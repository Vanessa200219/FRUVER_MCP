<?php  

		include 'model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM persona;");
		$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($productos);
	

	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>LISTA DE USUARIOS REGISTRADOS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/tabla.css">
</head>
<body>

    <!-- HEADER DE RUTAS Y DESCARGAS -->
    <div id="header">
            
        <a class="return  header" href="">INICIO</a>

    </div>
   <!-- FIN DE HEADER RUTAS Y DESCARGAS -->

	<center>
		<div class="div__firmts">
		<h3>LISTA DE USUARIOS REGISTRADOS</h3>
		<table class="table__1">
			<tbody>
			<tr class="td__tittle">
				<td>Nombres</td>
				<td>Apellidos</td>
				<td>Tipo de Documento</td>
				<td>Numero de Documento</td>
				<td>Telefono</td>
				<td>Correo</td>
                <td>Sexo</td>
				<td>Contraseña</td>
                <td>ID Rol</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
			</tbody>
			<?php 
				foreach ($usuarios as $dato) {
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
						<td><?php echo $dato->id_rol; ?></td>
						<td><a class="editar" href="editar.php?id=<?php echo $dato->NumerodeDocumento; ?>">Editar</a></td>
						<td><a class="eliminar" href="eliminar.php?id=<?php echo $dato->NumerodeDocumento; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>
		</div>
		<!-- inicio insert -->
		<hr>
		<h3>Ingresar Usuario:</h3>
		<form class="form" method="POST" action="insertar.php">
			<table class="form__items">
            <tr>
				<td>Nombre: </td>
				<td><input type="text" name="txtNombres" placeholder="Nombres" required></td>
			</tr>
		    <tr>
			    <td>Apellido: </td>
				<td><input type="text" name="txtApellidos" placeholder="Apellidos" required></td>
			</tr>
			<tr>
				  <td>Tipo de Documento: </td>
				  <td>
            <select name="txtTipodeDocumento" id="" required>
					    <option value=""></option>
					    <option value="1">C.C</option>
					    <option value="2">T.I</option>
					    <option value="3">C.E</option>
				    </select>
                 </td>
			</tr>
			<tr>
				<td>Numero de Documento: </td>
				<td><input type="text" name="txtNumerodeDocumento" minlength="7" maxlength="10" placeholder="Numero de Documento" required></td>
			</tr>
			<tr>
				<td>Telefono: </td>
				<td><input type="text" name="txtTelefono" minlength="10" maxlength="10" required></td>
			</tr>
            <tr>
				<td>Email: </td>
				<td><input type="text" name="txtCorreoElectronico" pattern=".+@.+.com" placeholder="ejemplo@gmail.com" required></td>
			</tr>
            <tr>
				 <td>Sexo: </td>
				 <td>
                      <select name="txtSexo" id="" required>
					   <option value=""></option>
					   <option value="1">F</option>
					   <option value="2">M</option>
				      </select>
                </td>
			</tr>
            <tr>
				<td>Contraseña: </td>
				<td><input type="password" name="txtContrasena"></td>
			</tr>
            <tr>
				 <td>ID Rol: </td>
				 <td>
                      <select name="txtRol" id="" required>
					   <option value=""></option>
					   <option value="1">1</option>
					   <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
				      </select>
                </td>
			</tr>
			<input type="hidden" name="oculto" value="1">
			<tr>
				<td><input type="reset" name=""></td>
				<td><input type="submit" name="Enviar" value="Registrarse"></td>
			</tr>
			</table>
		</form>
		<!-- fin insert-->


		

	</center>
</body>
</html>