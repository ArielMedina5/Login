<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
	<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
		<title></title>
	</head>
	<body>
		<div id="contenedor">
		
			<div id="login">
				<fieldset>
			<legend>LOG IN WITH</legend>
			<legend><img src="imgs/logo.png"></legend>
		</fieldset>
		<form action="login.php" method="POST">
			<input type="email" name="email" plasholder="ej@example.com"
			required="required">
			<br>
			<input type="password" name="password" placeholder="*****" required="required">
			<br>
			<input type="submit" name="enviar" >
		</form>
			</div>
		</div>

</html>