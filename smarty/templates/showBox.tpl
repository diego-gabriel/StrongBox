<!DOCTYPE>
<html>
<head>
<title>StrongBox - Ver Box!</title>
<script type="text/javascript" src = "scripts/showBox.js"></script>
<script type="text/javascript" src = "scripts/updateBox.js"></script>
</head>
<body>

	<form action = "updateBox.php" method = "POST" id = "updateBoxForm">
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
		<br>
	</form>
		<button onclick = "enableModify()" id = "modifyButton">Modificar</button>
{include file="showExtras.tpl"}
</body>
</html>