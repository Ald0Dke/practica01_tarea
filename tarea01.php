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
			<form action="procesar.php" method="post">
				<div>
					<label>Nombre(s):</label>
					<input class="input is-primary" type="text" name="nombre" required>
				</div>

                <div>
					<label>Apellido paterno:</label>
					<input class="input is-primary" type="text" name="apellidoPaterno" required>
				</div>

                <div>
					<label>Apellido materno:</label>
					<input class="input is-primary" type="text" name="apellidoMaterno" required>
				</div>

                <div>
					<label>Cargo:</label>
					<input class="input is-primary" type="text" name="cargo" required>
				</div>

                <div>
					<label>RFC:</label>
					<input class="input is-primary" type="text" name="rfc" required>
				</div>

                <div>
					<label>CURP:</label>
					<input class="input is-primary" type="text" name="curp" required>
				</div>

                <div>
					<label>Domicilio:</label>
					<input class="input is-primary" type="text" name="domicilio" required>
				</div>

				<div>
					<label>Teléfono</label>
					<input class="input is-primary" type="tel" name="telefono" required>
				</div>

                <div>
					<label>Correo electronico:</label>
					<input class="input is-primary" type="text" name="correoElectronico" required>
				</div>

                <div>
					<label>Sexo:</label>
					<input class="input is-primary" type="text" name="sexo" required>
				</div>

                <div>
					<label>Fecha de nacimiento:</label>
					<input class="input is-primary" type="text" name="fechaNacimiento" required>
				</div>

                <div>
					<label>Estado civil:</label>
					<input class="input is-primary" type="text" name="estadoCivil" required>
				</div>

                <div>
					<label>Escolaridad:</label>
					<input class="input is-primary" type="text" name="escolaridad" required>
				</div>

                <div>
					<label>Referencia familiar:</label>
					<input class="input is-primary" type="text" name="referenciaFamiliar" required>
				</div>

                <div>
					<label>Observaciones:</label>
					<input class="input is-primary" type="text" name="observaciones" required>
				</div>

				<div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>
			</form>
		</div>

		<div class="column"></div>

	</section>

</body>
</html>