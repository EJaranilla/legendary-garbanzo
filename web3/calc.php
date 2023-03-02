<html>
<head><title>Calculation Result</title></head>
<body>
    <?php   
    echo 'Calculator';
        if (isset($_POST['submit']))
        {
            $num1 = $_POST['val1'];
            $num2 = $_POST['val2'];
            $operator = $_POST['calc'];
            $result = '';

        # test if input is_numeric
       
			if(is_numeric($num1) && is_numeric($num2))
            {
				switch($operator){
					case 'add':
						$result = $num1 + $num2;
						break;
					case 'sub':
						$result = $num1 - $num2;
						break;
					case 'mul':
						$result = $num1 * $num2;
						break;
					case 'div':
						$result = $num1 / $num2;
						break;
					default:
						echo "Invalid operator";
				}
			} 
            else {
				echo "Please enter numeric values";
			}

			if($result != ''){
				echo "<h1>Calculation Result: $result<h1>";
			}
        }
    ?>
</body>
</html>