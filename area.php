<html>
	<head>
	</head>
	<body>
        <h1>Ingrese el valor de la longitud de los lados del octágono regular:</h1>
		<form method="POST">
			<input step="any" type="number" name="nombre" placeholder="Longitud (cm)">
			<br>
			<input type="submit" name="submit" value="Calcular área">
		</form>
	</body>
</html>

<?php
	if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
        $nombre = $_POST["nombre"];
        $area=4.83*($nombre*$nombre);
		echo "El valor del área es:<b>" .$area . "cm^2</b>";
	}
?>