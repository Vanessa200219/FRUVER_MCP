<?php  
	include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM persona WHERE NumerodeDocumento = ?;");
		$sentencia->execute([$id]);
		$persona1 = $sentencia->fetch(PDO::FETCH_OBJ);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/tabla.css">
</head>
<body>

 <!-- HEADER DE RUTAS Y DESCARGAS -->
 <div id="header">
            
            <a class="return  header" href="">INICIO</a>
            <a class="products  header" href="index.php">USUARIOS</a>
    
        </div>
       <!-- FIN DE HEADER RUTAS Y DESCARGAS -->


  <!-- Registrar -->
  <center>
    <h3>Editar Usuario:</h3>
    <form class="form" method="POST" action="../Controlador/editarProceso.php">
        <table class="form__items">
			<tr>
				<td>Nombre: </td>
				<td><input type="text" name="Nombres2" placeholder="Nombres" value="<?php echo $persona1->Nombres; ?>"></td>
			</tr>

		    <tr>
			  <td>Apellido: </td>
				<td><input type="text" name="Apellidos2" placeholder="Apellidos" value="<?php echo $persona1->Apellidos; ?>"></td>
			</tr>

			<tr>
				<td>Telefono: </td>
				<td><input type="text" name="Telefono2" minlength="10" maxlength="10" value="<?php echo $persona1->Telefono; ?>"></td>
			</tr>

            <tr>
				<td>Email: </td>
				<td><input type="text" name="CorreoElectronico2" pattern=".+@gmail.com" placeholder="ejemplo@gmail.com" value="<?php echo $persona1->CorreoElectronico; ?>"></td>
			</tr>

            <tr>
				<td>Contraseña: </td>
				<td><input type="password" name="Contrasena2" value="<?php echo $persona1->Contrasena; ?>"></td>
			</tr>



			<tr>
                    <input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona1->NumerodeDocumento ;?>">
					<td colspan="2"><input type="submit" value="Aceptar"></td>
			</tr>
		</table>
	</form>
    </center>
</body>
</html>