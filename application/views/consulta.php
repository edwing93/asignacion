<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicial</title>
<body>
 <form id="volver" action="operario">
  <h1>Datos Almacenados</h1>
	<table border="1">
		<tr><td><h3>Cedula</h3></td><td><h3>Nombres</h3></td><td><h3>Estado</h3></td></tr>
	<?php foreach($info as $valor): ?>
	<?php echo '<tr><td>'.$valor['Cedula'].'</td><td>'.$valor['Nombres'].'</td><td>'.$valor['Estado'].'</td></tr>';?>
	<?php endforeach;?>
	</table><br>
	<input type="submit" id="Btnvolver" value="Atras">
</form>
</body>
</html>
