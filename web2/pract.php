<!DOCTYPE html>
<html>
<head>
	<title>Button Pressed Inputs</title>
</head>
<body>

	<?php
		if(isset($_POST['submit'])) {
			$input1 = $_POST['input1'];
			$input2 = $_POST['input2'];
			echo "Input 1: " . $input1 . "<br>";
			echo "Input 2: " . $input2 . "<br>";
		}
	?>

	<form method="post">
		Input 1: <input type="text" name="input1"><br>
		Input 2: <input type="text" name="input2"><br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>