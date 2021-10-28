<?php  
	include '../Conexion/Conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM persona WHERE NumerodeDocumento = ?;");
		$sentencia->execute([$id]);
		$persona1 = $sentencia->fetch(PDO::FETCH_OBJ);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSSindex/Portada.css">
    <link rel="stylesheet" href="../CSSCuenta/Editar.css">
    <title>Modificacion Informacion</title>
</head>
<body>
    
    <!-- MENU -->
  <section id="header">
    <div class="header">
        <div class="brand">
          <a href="../../indexPortada.php">
            <img src="../../imgindex/logo.png" alt="">
          </a>
        </div>
      <div class="nav-bar">
        
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#" data-after="Inicio">Inicio</a></li>
            <li><a href="#about" data-after="Productos">Productos</a></li>
            <li><a href="#services" data-after="Informacion">Ayuda</a></li>
            <li><a href="#contact" data-after="Contactos">Contactos</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- FIN DE MENU -->    


  <!-- Registrar -->
    <div class="texto">
      <h6>Modificar Informacion</h6>
    </div>

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

  <script src="../../indexJava/app.js"></script>
</body>
</html>
