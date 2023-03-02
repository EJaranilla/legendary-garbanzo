
<?php
$num_visits = 1;
if(isset($_COOKIE['visits'])){
    $num_visits = $_COOKIE['visits'] + 1;
}
setcookie('visits', $num_visits, time() + (86400 * 30));
if ($num_visits > 29 && $num_visits <=39)
    {
        echo 'you have been here a lot';
    }
else{}

if (isset($_GET['reset']) && $_GET['reset'] == 'true') {

	$num_visits = 0;
	exit;
}

?>
<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>
