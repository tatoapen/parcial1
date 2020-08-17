<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Venta</title>
</head>
<body>

	<form action="venta.php" method="post">
		<div class="form-group">
			<label for="codigo">Codigo del Lechon</label>
			<input type="text" name="codigo">
		</div>

		<div class="form-group">
			<label for="Comprador">Comprador</label>
			<input type="text" name="Comprador">
		</div>
		<div class="form-group">
			<label for="Fecha">Fecha</label>
			<input type="date" name="Fecha">
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
   	
</div>
</body>
</html>

<?php
	if(isset($_POST['registro'])){
		$codigo = $_POST['codigo'];
		$comprador = $_POST['Comprador'];
		$fecha = $_POST['Fecha'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];


		$query = "INSERT INTO venta (codigo, comprador, fecha, descripcion, precio)
		 VALUES('$codigo','$comprador','$fecha','$descripcion','$precio')";

		$result = mysqli_query($conn, $query);
		if($result){
			die("Se registró la venta");
		}else{
			die("Error");
		}

	}

?>