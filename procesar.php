<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglos</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">
      			Datos de persona
    		</p>
  		</div>
	</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			

  			<?php
	
				$nombre = $_POST['nombre'];
                $apellidoPaterno = $_POST['apellidoPaterno'];
                $apellidoMaterno = $_POST['apellidoMaterno'];
                $cargo = $_POST['cargo'];
				$rfc = $_POST['rfc'];
                $curp = $_POST['curp'];
                $domicilo = $_POST['domicilio'];
				$telefono = $_POST['telefono'];
                $correoElectronico = $_POST['correoElectronico'];
                $sexo = $_POST['sexo'];
                $fechaNacimiento = $_POST['fechaNacimiento'];
                $estadoCivil = $_POST['estadoCivil'];
                $escolaridad = $_POST['escolaridad'];
                $referenciaFamiliar = $_POST['referenciaFamiliar'];
                $observaciones = $_POST['observaciones'];



				echo "<h1 class='is-subtitle'>";
				echo "Hola " . $apellidoPaterno . " " . $apellidoMaterno . " " . $nombre . ".";
				echo "<br>Tu cargo es: " . $cargo . ".";
                echo "<br>Tu RFC es: " . $rfc . ".";
                echo "<br>Tu CURP es: " . $curp . ".";
                echo "<br>Tu domicilio es: " . $domicilo . ".";
				echo "<br>Tu número telefónico es: " . $telefono . ".";
                echo "<br>Tu correo electronico es: " . $correoElectronico . ".";
                echo "<br>Tu sexo es: " . $sexo . ".";
                echo "<br>Tu fecha de nacimiento es: " . $fechaNacimiento . ".";
                echo "<br>Tu estado civil es: " . $estadoCivil . ".";
                echo "<br>Tu escolaridad es: " . $escolaridad . ".";
                echo "<br>Tu referencia familiar es: " . $referenciaFamiliar . ".";
                echo "<br>Tus observaciones son: " . $observaciones . ".";




				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>

</body>
</html>



