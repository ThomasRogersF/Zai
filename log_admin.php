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
     <!--   <img src="../img/logo2.jpg">-->
      </div>
    </header>
    <div class="bienvenido">
      <h1>Bienvenido Administrador</h1>
    </div><!--Bienvenido-->
     <div class="login">
      <div class="formulario">
        <div id="login">
        
        <form action="include/log_adm.php" method="POST">
                
          <p><i class="icon-user"></i><input type="text"  name="uid" placeholder="Cedula" onBlur="if(this.value == '') this.value = ''" onFocus="if(this.value == '') this.value = ''" required></p>
          <p><i class="icon-lock"></i><input type="password" name="pwd" placeholder="Contraseña" class  onBlur="if(this.value == '') this.value = ''" onFocus="if(this.value == '') this.value = ''" required maxlength="14" minlength="6" ></p>
          <p><input type="submit" name="submit2" value="Iniciar Sesión"></p>

        </form>
        
        <center><a href="index.php"><i class="icon-arrow-left"></i><b>Regresar</b></a></center>
        <br>
         <!--   <center> <a href="olvidar.php">olvide mi contraseña</a></center>    -->
       </div> <!-- end login -->
      </div>
    </div>

  </body>

</html>
