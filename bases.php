<?php
session_start();
require 'include/dbh.inc.php';

if (isset($_SESSION['Admin'])){
?>

<!DOCTYPE html>
<style>
table {
    border-collapse: collapse;
    width: 100%;
     border border-radius: 20px;
            border-color:black;
}

th, td {
    text-align: left;
    padding: 8px;
        border-color:black;
}

    td{
       
        background-color: aliceblue;
    }


th {
    background-color: black;
    color: white;
} 
</style>
<html>
<head>
<title>Bases de datos</title>
<link rel="stylesheet" type="text/css" href="css/codigo.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div><a href="admin_user.php" class="formabutton">Volver</a>
<h1>Bases de datos</h1>
</div>

<br>
<br>
<br>
<center> 
	<table class="table">
		<tr>
			<th>Id</th>
			<th>Nombre de la pieza requerida</th>
			<th>Unidad necesitada</th>
			<th>Fecha de pedido</th>
			
			<th colspan="4">Operaciones</th>	
		</tr>

		<?php 
		$sql="SELECT * from inventario";
		$result=mysqli_query($conn,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID']; ?></td>
			<td><?php echo $mostrar['pieza_requerida']; ?></td>
			<td><?php echo $mostrar['id_Unidad']; ?></td>
			<td><?php echo $mostrar['Fecha']; ?></td>
             <td>
             <form action="modificar.php" method="post">
             <input type="hidden" name="id" value="<?php echo $mostrar['ID']; ?>">
            <td><button type="submit" name="submit2" placeholder="Modificar elemento">Modificar elemento...</button></td></form>
             <td><a href="include/eliminar.php?ID=<?php echo $mostrar['ID']; ?>" onclick="return confirm('¿Esta seguro que quiere Eliminar el Registro?');">-----          Eliminar Registro</a></td>
		</tr>
		
		
	<?php 
	}
}
else {
   ?> <script> alert("Primero debe Iniciar Sesion."); window.location.href="log_admin.php"; </script> <?php exit();
					
}
	 ?>
	</table>
</center>

		<form action="include/backup.php" method="post">
		  <button type="submit" name="submit" class="formabutton">
		      GENERAR PLANILLA
		  </button>
		    
		</form>
		
		<form action="pdf/Reporte-Asistencias.php" method="post" target="_blank">
                <input type="hidden">
                   <button type="submit" name="submit">Generar Planilla.</button>
        </form>

</body>

</html>

