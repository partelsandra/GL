<!DOCTYPE html>
<html>
<head>
	<title>Hääletussüsteem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Hääletus</h1>
	<form action="insert.php" method="post">
		<label for="eesnimi">Eesnimi:</label>
		<input type="text" id="eesnimi" name="eesnimi" required><br>
	<label for="perenimi">Perenimi:</label>
	<input type="text" id="perenimi" name="perenimi" required><br>

	<label for="otsus">Hääletuse otsus:</label>
	<select id="otsus" name="otsus" required>
		<option value="poolt">Poolt</option>
		<option value="vastu">Vastu</option>
	</select>
	<button type="submit">Hääleta</button>
</form>
</body>
</html>