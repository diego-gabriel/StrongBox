<!DOCTYPE>
<html>
<head>
<title>StrongBox - Bienvenido!</title>
</head>
<body>
<h4>Hola {$user}! Bienvenido a tu StrongBox.</h4>
{if empty($boxes)}
	<p>Usted no tiene boxes.<p>
{else}
	<table>
	<tr>
	  <th>Numero</th>
	  <th>Titulo</th>		
	</tr>
	{section name=row loop=$boxes}
		<tr>
	      {foreach from=$boxes[row] key="Key" item="Value"}
	      	<td>{$Value}<td>
	      {/foreach}
	  </tr>
	  {/section}
	</table>
{/if}
<a href="closeSession.php">Cerrar Sesion</a>
<a href="createBox.php">Crear Box</a>
<a href="deleteBox.php">Eliminar Box</a>
</body>
</html>