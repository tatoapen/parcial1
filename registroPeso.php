<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro del animal</title>
</head>
<body>

	<form action="registroPeso.php" method="post">
		<div class="form-group">
			<label for="codigo">Codigo</label>
			<input type="text" name="codigo">
		</div>
		<div class="form-group">
			<label for="peso">Peso</label>
			<input type="number" name="peso">
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
		

		$query = "INSERT INTO registro_peso (codigoCerdo, peso)
		 VALUES('$codigo','$peso')";

		$result = mysqli_query($conn, $query);
		if($result){
			die("Se registró el animal");
		}else{
			die("Error");
		}

	}

?>