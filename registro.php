<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/registro.css">
		<title></title>
	</head>
	<body>
		<div id="contenedor">

			<div id="sh">
					<h1>Registro</h1>
				<form action="registro.php" method="POST">
					<input class="input"  type="text" name="nombre" placeholder="nombre" required="required" style="color: white">
					<br>
					<input class="input"  type="text" name="apellido" placeholder="apellido" required="required" style="color: white">
					<br>
					<input class="input"  type="day" name="fecha" placeholder="01/01/01" required="required" style="color: white">
					<br>
					<input class="input"  type="email" name="email" placeholder="ej@example.com"required="required" style="color: white">
					<input class="input" type="password" name="password" placeholder="contraseña">				
					<br>
					<div class="sexo">
						<label class="nada"><input type="radio" name="sexo" value="0"> Femenino</label>
						
						<br>
						<label class="nada"><input type="radio" name="sexo" value="1"> Masculino</label>
						<input type="submit" name="enviar" value="enviar"class="paralelogramo">
						
					</div>
					<br>
				
				</form>
				</div>
		</div>
	</body>
</html>