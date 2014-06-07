<!DOCTYPE>
<html>
<head>
	<title>StrongBox - Registro</title>
</head>
<body>
	<p>{$message}</p>
	<form action = "registerUser.php" method = "POST">
		<label for = "reg-username">Nombre de Usuario:
		</label>
		<input required type = "text" name = "username" placeholder = "usuario" id = "red-username"></input><br>

		<label for = "reg-password">Contraseña:
		</label>
		<input required type = "password" name = "password" placeholder = '*******' id = "reg-password"></input><br>
		<input type = "submit">

	</form>
</body>
</html>