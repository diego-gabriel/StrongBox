<!DOCTYPE>
<html>
<head>
<title>StrongBox - Ver Box!</title>
<script type="text/javascript" src = "scripts/showBox.js"></script>
<script type="text/javascript" src = "scripts/updateBox.js"></script>
<script type="text/javascript" src = "scripts/createBox.js"></script>
</head>
<body>

	<form action = "updateBox.php?id={$box_id}" method = "POST" id = "boxForm">
		<label for = "title">Titulo:</label>
		<input readonly value = "{$title}" name = "title" id = "title"></input>
		<br>

		<label for = "url">URL:</label>
		<input readonly value = "{$url}" name = "url" id = "url"></input>
		<br>

		<label for = "password">Contraseña:</label>
		<input readonly required id = "password" type = "password" value = "{$password}" name = "password" id = "password"></input>
		<input id = "change" type = "button" onclick = "togglePassword()" value = "Ver"></input>
		<br>
		<label for = "username">Nombre de usuario:</label>
		<input readonly required value = "{$username}" name = "username" id = "username"></input>
		<br>
		{include file="showExtras.tpl"}
		<br>
	</form>
	<button onclick = "enableModify()" id = "modifyButton" type = "button">Modificar</button>
	<button><a href="deleteBox.php?id={$box_id}">Eliminar Box</a></button>
	<br>
	<br>
	<a href="index.php">Volver a Inicio</a>
</body>
</html>