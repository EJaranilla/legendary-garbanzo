<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
    if (isset($_POST['username']) && !empty($_POST['username']))
    if (isset($_POST['color']) && !empty($_POST['color']) && isset($_POST['dish']) && !empty($_POST['dish']))
    {
        $username = $_POST['username'];
        $color = $_POST['color'];
        $dish = $_POST['dish'];
        echo "Thank you for your selection $username. <br> You really enjoyed $dish. <br> -espically with a nice $color wine";
    }
    else 
    {
        $dish = null;
        $color = null;
        $username = null;
        echo "sorry some details are empty";
    }
    ?>
</body>
</html>