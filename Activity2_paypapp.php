<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Face App</title>
</head>
<body>
	<?php

		$size = 30;
		$color = '#ff0000';

		if (isset($_GET['btnProcess'])) {

			$size = $_GET['rangeSize'];
			$color = $_GET['colorborder'];

		}
	?>
	<form method="get">
		<h3>Pays App</h3>

		<label for="rangeSize">Select Photo Size</label>
		<input type="range" name="rangeSize" id="rangeSize" min="10" max="100" step="10" value="60">
		<br>

		<label for="colorborder">Select Border Color</label>
		<input type="color" name="colorborder" id="colorborder">
		<br>

		<button type="submit" name="btnProcess">Process</button>
	</form>
	<br>

	<img src="image/cat.jpg" style="width: <?php echo $size . '%'; ?>;border-color:<?php echo $color; ?>;border-width: 5px; border-style: solid;">

</body>
</html>