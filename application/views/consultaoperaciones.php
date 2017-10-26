<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicial</title>
<body>
 <form id="volver" action="operacion">
  <h1>Listado de operaciones</h1>
	<table border="1">
		<tr><td><h3>Codigo</h3></td><td><h3>descripcion</h3></td><td><h3>Tiempo</h3></td><td><h3>Valor</h3></td></tr>
	<?php foreach($info as $valor): ?>
	<?php echo '<tr><td>'.$valor['Id_operacion'].'</td><td>'.$valor['Descripcion'].'</td><td>'.$valor['Tiempo'].'</td><td>'.$valor['Valor_operacion'].'</td></tr>';?>
	<?php endforeach;?>
	</table><br>
	<input type="submit" id="Btnvolver" value="Atras">
</form>
</body>
</html>
