<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Exercice 4</title>
	</head>
	<body>
	<div class="jumbotron m-auto text-center">
		<h1>The Secret?</h1>
		<?php
    $truth = "Truth is: ";
    echo $truth;
    $universe = 42;
    echo "<br>";
    echo $universe;
    echo "\n";
    echo gettype($universe);
    $pi = 3.14159265359;
    echo "<br>";
    echo $pi;
    echo "\n";
    echo gettype($pi);
    $amITheBoss = true;
    echo "<br>";
    echo $amITheBoss;
    echo "\n";
    echo gettype($amITheBoss);
		?>
	</div>
	</body>
</html>
