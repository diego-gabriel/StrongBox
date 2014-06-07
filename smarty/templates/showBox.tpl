<!DOCTYPE>
<html>
<head>
<title>StrongBox - Ver Box!</title>
<script type="text/javascript" src = "./smarty/templates/showBox.js"></script>
</head>
<body>
	<label>Titulo:</label>
	<input readonly value = "{$title}"></input>
	<br>

	<label>URL:</label>
	<input readonly value = "{$url}"></input>
	<br>

	<label>Contraseña:</label>
	<input readonly id = "password" type = "password" value = "{$password}"></input>
	<input id = "change" type = "button" onclick = "togglePassword()" value = "Ver"></input>
	<br>
	<label>Nombre de usuario:</label>
	<input readonly value = "{$username}"></input>
</body>
</html>