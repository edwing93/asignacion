<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Crear operario</title>
</head>

<body>
<h1>CREAR OPERARIO</h1>
<script>
	$(document).ready(function(){
		$("#Btnregistrar").click(function(){
			var btnaction="crear";
			$("#operarios").attr('action',btnaction);
		});
		$("#Btnconsultar").click(function(){
			var btnaction="consultar";
			$("#operarios").attr('action',btnaction);
		});
		$("#Btnactualizar").click(function(){
			var btnaction="actualizar";
			$("#operarios").attr('action',btnaction);
			alert("Paso");
		});
		$("#Btneliminar").click(function(){
			var btnaction="eliminar";
			$("#operarios").attr('action',btnaction);
			alert("Paso");
		});
	});
</script>
<div>
<form action="" method="post" id="operarios">
	<input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cedula"><br><br>
	<input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres"><br><br>
	<input type="text" id="estado" name="estado" class="form-control" placeholder="Estado"><br><br>
	<input type="submit" id="Btnregistrar" value="Registrar" name="guardar" class="form-control">
	<input type="submit" id="Btnconsultar" value="Consultar" name="consultar" class="form-control">
	<input type="submit" id="Btnactualizar" value="Actualizar" name="actualizar" class="form-control">
	<input type="submit" id="Btneliminar" value="Eliminar" name="eliminar" class="form-control">
</form>
</div>
</body>
</html>
