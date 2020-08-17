<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuario</title>
</head>
<body>

	<form action="registrousu.php" method="post">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre">
		</div>
		<div class="form-group">
			<label for="contraseña">contraseña</label>
			<input type="number" name="contraseña">
		</div>
		
		<input type="submit" name="registro">
	</form>

<div class="pestanas">
   <ul>
   <li id="pestana0" class="pestanainactiva">
   	<a href="master.php" >atras</a>
   	

</body>
</html>

<?php
	if(isset($_POST['registrousu'])){
		$nombre = $_POST['nombre'];
		$contraseña = $_POST['contraseña'];
		

		$query = "INSERT INTO usuario (nombre, contraseña)
		 VALUES('$nombre','$contraseña')";

		$result = mysqli_query($conn, $query);
		if($result){
			die("Se registró el usuario");
		}else{
			die("Error");
		}

	}

?>