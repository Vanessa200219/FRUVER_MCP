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
            <li><a href="#about" data-after="Productos">Productos</a></li>
            <li><a href="#services" data-after="Informacion">Ayuda</a></li>
            <li><a href="inicio.php#contact" data-after="Contactos">Contactos</a></li>
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
      <h6>Modificar Perfil</h6>
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
				<td><input type="text" name="CorreoElectronico2" pattern=".+@.+.com" placeholder="ejemplo@gmail.com" value="<?php echo $persona1->CorreoElectronico; ?>"></td>
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
