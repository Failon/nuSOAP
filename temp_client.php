<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-16">
	<title>Cliente temperatura</title>
</head>
<body>
	<form action="temp_server.php" method="POST">
		Ciudad <input type="text" name="ciudad">
		Pais <input type="text" name="pais">
		<input type="hidden" name="realizado" value="1">
		<button>Procesar</button>
	</form>
</body>
</html>

