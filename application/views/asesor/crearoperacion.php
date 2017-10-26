<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Crear operario</title>
</head>

<body>
<h1>CREAR OPERACIONES</h1>
<script>
	$(document).ready(function(){
		$("#Btnregistrar").click(function(){
			var btnaction="crear";
			$("#operacion").attr('action',btnaction);
		});
		$("#Btnconsultar").click(function(){
			var btnaction="consultar";
			$("#operacion").attr('action',btnaction);
		});
		$("#Btnactualizar").click(function(){
			var btnaction="actualizar";
			$("#operacion").attr('action',btnaction);
			alert("Paso");
		});
		$("#Btneliminar").click(function(){
			var btnaction="eliminar";
			$("#operacion").attr('action',btnaction);
			alert("Paso");
		});
	});
</script>
<div>
<form action="" method="post" id="operacion">
	<input type="text" id="id" name="id" class="form-control" placeholder="Codigo"><br><br>
	<input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Operacion"><br><br>
	<input type="text" id="tiempo" name="tiempo" class="form-control" placeholder="Tiempo en horas"><br><br>
	<input type="text" id="valor" name="valor" class="form-control" placeholder="Valor"><br><br>
	<input type="submit" id="Btnregistrar" value="Registrar" name="guardar" class="form-control">
	<input type="submit" id="Btnconsultar" value="Consultar" name="consultar" class="form-control">
	<input type="submit" id="Btnactualizar" value="Actualizar" name="actualizar" class="form-control">
	<input type="submit" id="Btneliminar" value="Eliminar" name="eliminar" class="form-control">
</form>
</div>
</body>
</html>
