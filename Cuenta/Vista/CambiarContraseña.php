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
    <link rel="stylesheet" href="../../CSSindex/index.css">
	  <link rel="stylesheet" href="../CSSCuenta/estilo.css">
	  <link rel="stylesheet" href="../CSSCuenta/estilomenu2.css">
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
  <br><br><br><br><br><br><br><br>
    <div class="texto">
      <h6>Cambiar Contraseña</h6>
    </div>

    <form class="form" method="POST" action="../Controlador/ProcesoContraseña.php">
        <table class="form__items">
			<tr>
				<td>Antigua Contraseña: </td>
				<td><input type="password" name="AntiguaContrasena" placeholder="Antigua Contraseña" value=""></td>
			</tr>

		    <tr>
			  <td>Nueva Contraseña: </td>
				<td><input type="password" name="NuevaContrasena" placeholder="Nueva Contraseña" value=""></td>
			</tr>

			<tr>
				<td>Confirme Contraseña: </td>
				<td><input type="password" name="ConfirmeContrasena" placeholder="Confirme Contraseña" value=""></td>
			</tr>

      



			<tr>
                    <input type="hidden" name="aceptar">
					<input type="hidden" name="id3" value="<?php echo $persona1->NumerodeDocumento ;?>">
					<td colspan="2"><input type="submit" value="Aceptar"></td>
			</tr>
		</table>
	</form>

  <script src="../../indexJava/app.js"></script>
</body>
</html>
