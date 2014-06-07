<!DOCTYPE>
<html>
<head>
	<title>StrongBox-Login</title>
</head>
<body>
	<p>{$message}</p>
	<form action = "login.php" method = "POST">
		<label>Nombre de usuario:</label>
		<input required type = "text" name = "username"></input>
		<br>
		<label>Contraseña:</label>
		<input required type = "password" name = "password"></input>
		<br>
		<input type = "submit">
	</form>

	<p>Aun no tienes una cuenta? <a href="register.php">Registrate aqui!</a> </p>
</body>
</html>