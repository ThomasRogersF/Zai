<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/codigo.css">
	<h1 class="titulo">ACCESO ADMINISTRATIVO</h1>
</head>
<body>

 
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="bases.php">VOLVER</a></li>
			</ul>
			<div class="nav-login">
				
			</div>
		</div>
	</nav>
</header>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Modificar elemento</h2>
		
	
		 
		 <?php       
           if(isset($_REQUEST['submit2'])){
               
               $id=$_POST['id'];
               include ("include/dbh.inc.php");
               $sql="SELECT * from inventario WHERE ID = '$id'";
               $result=mysqli_query($conn,$sql);
               $mostrar=mysqli_fetch_array($result);
             
             ?>
             
			 <form class="signup-form" method="POST" action="include/operacion_guardar.php?=<?php echo $mostrar['ID']; ?>">
			 
<input type="hidden" name="ID" value="<?php echo $mostrar['ID']; ?>" >
<label for="pieza_requerida" required>Nombre de la pieza requerida:</label>
<input type="text"  name="pieza_requerida" placeholder="nombre" value="<?php echo $mostrar['pieza_requerida'];?>"/> <br>
<label for="id_Unidad" required>Unidad:</label>
 <select id="list" name="id_Unidad" required><br><br>
                <option value="<?php echo $mostrar['id_Unidad'];?>"><?php echo $mostrar['id_Unidad']; ?></option>
                <option value="Iveco Stralis">Iveco Stralis</option>
                <option value="Mack cruiseliner">Mack cruiseliner</option>
                <option value="Pegaso 260 cv">Pegaso 260 cv</option>
            </select>
<br><br>
 
 <br>
     <button type="submit" name="submit">Modificar</button>
<br>

<style>
    body{
          background-color:deepskyblue;
    }
                 </style>
<?php 
  }
else{
    ?> <script> alert("Volver"); window.location.href="bases.php"; </script> <?php exit();
}
	 ?>
</form>
	</div>
</section>
</body>
</html>