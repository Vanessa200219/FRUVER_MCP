<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSSindex/indexPortada.css">
    <title>Registrarse</title>
</head>
<body>
    
    <!-- MENU -->
  <section id="header">
    <div class="header">
      <div class="nav-bar">
        <div class="brand">
          <a href="../../index.php">
            <img src="../../imgindex/logo.png" alt="">
          </a>
        </div>
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
  <section>

  <!-- MENSAJE DE REGISTRO -->
        <section class="message">
            <div class="message__text">
                <?php
                    include("../Controlador/ProductoRegistro.php");
                ?>
            </div>
        </section> 
    <!-- FIN DE MENSAJE REGISTRO -->

  
      <div>
        <form class="form__items" action="" method="GET">

            <h1 class="tittle">Registrarse</h1>

            <label>Nombres</label>
            <input type="text" name="Nombres" placeholder="Nombres" required><br><br>


            <label>Apellidos</label>
            <input type="text" name="Apellidos" placeholder="Apellidos" required><br><br>
            

            <label>Tipo de Documento</label>
            <select name="TipodeDocumento" id="" required>
              <option value=""></option>
					    <option value="1">C.C</option>
					    <option value="2">T.I</option>
					    <option value="3">C.E</option>
				    </select><br><br>
        

            <label>Numero de Documento </label>
            <input type="text" name="NumerodeDocumento" minlength="7" maxlength="10" placeholder="Numero de Documento" required><br><br>
            

            <label>Telefono</label>
            <input type="text" name="Telefono" placeholder="Telefono" minlength="10" maxlength="10" required><br><br>
            

            <label>Correo Electronico</label>
            <input type="text" name="CorreoElectronico" pattern=".+@gmail.com" placeholder="ejemplo@gmail.com" required><br><br>


            <label>Sexo</label>
            <select name="Sexo" id="" required>
              <option value=""></option>
					    <option value="1">F</option>
					    <option value="2">M</option>
				    </select><br><br>


            <label>Contrasena</label>
            <input type="password" name="Contrasena" placeholder="Contrasena" required><br><br>



            <input type="submit" name="Enviar" value="Registrarse">
          </form>
      </div>
  </section>

  <script src="../../indexJava/app.js"></script>
</body>
</html>