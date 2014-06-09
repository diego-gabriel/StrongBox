<!DOCTYPE>
<html>
<head>
	<title>StrongBox - Nuevo Box</title>
	<script type="text/javascript" src = "scripts/createBox.js"></script>
</head>
<body>
	<h4>Nuevo BOX</h4>
	<form action = "createBox.php" method = "POST" id = "boxForm">
		<label for = "title">Titulo:</label>
		<input type = "text" id = "title" name = "title">
		<br>
		<label for = "username">Nombre de usuario:</label>
		<input type = "text" required id = "username" name = "username">
		<br> 
		<label for = "password">Contraseña:</label>
		<input type = "password" required id = "password" name = "password">
		<br>
		<label for = "url">URL:</label>
		<input type = "url" id = "url" name = "url">
		<br>
		<button onclick = "newExtra()" type = "button">Añadir elemento</button>
		<input type = "submit">
	</form>
</body>
</html>