<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Script de CJ</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="viewer.php" method="GET" role="form">
			<legend>Averigua que significa tu nombre</legend>
			
			<div class="form-group">
				<label for="">Nombre</label>
				<input name="name" type="text" class="form-control" id="name" placeholder="Escribe tu nombre">
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="gender" id="input" value="m">
					Hombre
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="gender" id="input" value="f">
					Mujer
				</label>
			</div>
			
			
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form></div>
	</body>
	</html>