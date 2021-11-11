<?php
 include 'includes/session-destroy.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Transporte Jayet C.A</title>
    <link rel="stylesheet" type="text/css" href="../css/log_user.css">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <div id="header">
      </div>
    </header>
    <div class="bienvenido">
      <h1>Cambiar Contraseña</h1>
    </div><!--Bienvenido-->
    <div class="login">
      <div class="formulario">
        <div id="login">
        
          <form action="cambiar_contra.php" method="POST">
                
          <p><i class="icon-user"></i><input type="text"  name="nombre" placeholder="nombre" onBlur="if(this.value == '') this.value = 'nombre'" onFocus="if(this.value == 'nombre') this.value = ''" required></p>
          <p><i class="icon-lock"></i><input type="text" name="cedula" placeholder="cedula" class  onBlur="if(this.value == '') this.value = ''" onFocus="if(this.value == '') this.value = ''" required maxlength="20" minlength="1" ></p>
          <p><input type="submit" name="submit" value="Recuperar"></p>

        </form>
        
        <center><a href="index.php"> <i class="icon-arrow-left"></i><b>   Regresar</b></a></center>

    </div> <!-- end login -->
      </div>
    </div>

  </body>

</html>
