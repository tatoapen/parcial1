<?php
	include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compras realizadas</title>
</head>
<body>


</body>
</html>

<?php 

		
		$query = "SELECT codigo,peso,edad,descripcion,precio FROM cerdo ";

		$result = mysqli_query($conn, $query);
		mysqli_data_seek ($result, 0);
		$extraido= mysqli_fetch_array($result);
?>