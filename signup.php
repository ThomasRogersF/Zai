<?php
session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Transporte Jayet C.A</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/validacion.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
	</head>
	
	<style>
        .form-group {
            text-align:;
            /*background-color:deepskyblue;*/
            background-color: gray;
            opacity: .9;
            width:50%;
            padding:10px;
            margin-top:10px;
            margin-left:auto;
            margin-right: auto;
            border-radius:10px;
        }

        .box {
            height:40px;
            border-radius:5px;
            margin-top:7px;
            padding-left:10px;
        }    
        
        #list{
            height:30px;
            border-radius:5px;
            margin:5px;
            border-bottom-color: blueviolet;
        }  
    </style>

	<body>
            <header>
                <a href="admin_user.php" class="formabutton"><h3>Atras</h3></a>		
			        <div id="header">
			        </div>
		    </header>
		
		<?php 	if ($_SESSION['Admin']){ ?>
		
		<div class="bienvenido">
                
            <h1>REGISTRAR USUARIO</h1> 
                 	
		</div><!--Bienvenido-->
    	<div class="form-group">

		<h2>Ingrese los datos</h2>

	    <form class="signup-form" method="POST" onsubmit="return validar();" action="include/signup.inc.php" >
            <label for="pieza-requerida">Nombre de la pieza requerida:</label>
        <input type="text" name="pieza-requerida" class="box" placeholder="pieza-requerida"  maxlength="15" required> <br><br>
            
        <label for="id-Unidad">id-Unidad:</label>
        <br>
            <select id="list" name="id-Unidad" required>
                <option value="Iveco Stralis">Iveco Stralis</option>
                <option value="Mack cruiseliner">Mack cruiseliner</option>
                <option value="Pegaso 260 cv">Pegaso 260 cv</option>
            </select><br><br>
    
        <br><br>
                     <button type="submit" id="list" name="submit">Registrar</button>
<br>

<?php }
             else {
                 
               ?> <script> alert("Primero debe Iniciar Sesion."); window.location.href="log_admin.php"; </script> <?php exit();
             
             }
             
             ?>




</form>
	</div>

</body>
</html>