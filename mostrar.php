<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro del animal</title>
</head>
<body>

	<form action="mostrar.php" method="post">
		<div class="form-group">
			<label for="codigo">Codigo</label>
			<input type="text" name="codigo">
		</div>
		<div class="form-group">
			<label for="peso">Peso</label>
			<input type="number" name="peso">
		</div>
		<div class="form-group">
			<label for="edad">Edad</label>
			<input type="number" name="edad">
		</div>
		<div class="form-group">
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion">
		</div>
		<div class="form-group">
			<label for="precio">Precio</label>
			<input type="number" name="precio">
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
	if(isset($_POST['registro'])){
		$codigo = $_POST['codigo'];
		$peso = $_POST['peso'];
		$edad = $_POST['edad'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];


		$query = "INSERT INTO cerdo (codigo, peso, edad, descripcion, precio)
		 VALUES('$codigo','$peso','$edad','$descripcion','$precio')";

		$result = mysqli_query($conn, $query);
		if($result){
			die("Se registró el animal");
		}else{
			die("Error");
		}

	}

?>