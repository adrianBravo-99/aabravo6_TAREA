<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="estilos/estilos.css">

</head>
<body>
	<?php
	
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");


		//CUADRADO
		$lado_cuadrado = isset($_GET['lado1']) ? $_GET['lado1'] : null;

		//RECTANGULO
		$lado1_rectangulo = isset($_GET['lado1']) ? $_GET['lado1'] : null;
		$lado2_rectangulo = isset($_GET['lado2']) ? $_GET['lado2'] : null;

		//TRIANGULO
		$lado1_triangulo = isset($_GET['lado1']) ? $_GET['lado1'] : null;
		$lado2_triangulo = isset($_GET['lado2']) ? $_GET['lado2'] : null;
		$lado3_triangulo = isset($_GET['lado3']) ? $_GET['lado3'] : null;


		$objCuadrado = new cuadrado($lado_cuadrado);
		$objRectangulo = new rectangulo($lado1_rectangulo,$lado2_rectangulo);
		$objTriangulo = new triangulo($lado1_triangulo,$lado2_triangulo,$lado3_triangulo);
			
		echo figura::get_form();
	
	?>

	
	
</body>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		var tipo = document.querySelector('select[name="tipo"]');
		var lado1 = document.querySelector('input[name="lado1"]');
		var lado2 = document.querySelector('input[name="lado2"]');
		var lado3 = document.querySelector('input[name="lado3"]');
		
		lado1.disabled = true;
		lado2.disabled = true;
		lado3.disabled = true;
		
		tipo.onchange = function() {
			lado1.disabled = true;
			lado2.disabled = true;
			lado3.disabled = true;
			
			switch (this.value) {
				case "cuadrado":
					lado1.disabled = false;
					break;
				case "rectangulo":
					lado1.disabled = false;
					lado2.disabled = false;
					break;
				case "triangulo":
					lado1.disabled = false;
					lado2.disabled = false;
					lado3.disabled = false;
					break;
			}
		};
	});
</script>

</html>
