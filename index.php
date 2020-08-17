<?php
	include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body class="bg-black">
<body>
	<form action="index.php" method="POST">
		
		<div>
			<label>Nombre</label>
			<input type="text" name="nombre">
		</div>
		<div>
			<label>Contrasena</label>
			<input type="password" name="password">
		</div>
		<input type="submit" name="mandar">
	</form>
</body>
</body>
</html>


<?php 

	if(isset($_POST['mandar'])){
		$nombre = $_POST['nombre'];
		$password = $_POST['password'];

		$dquery = "SELECT * FROM usuario WHERE nombre = '$nombre' AND contraseña = '$password'";
		
		$resultado = mysqli_query($conn, $dquery);
		if($row = mysqli_fetch_array($resultado)){
			$_SESSION['user'] = $row[1];
			header("Location: master.php");
	    }else{
	    	die("Credenciales incorrectas");
	    }
				
		
			
	}

?>