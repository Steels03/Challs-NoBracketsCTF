
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
	<title> OMBRE </title>

		<nav id="menu">

		<h2> Plus rapide que ton ombre </h2>
		<ul>
		<li> <a href="#menu" class="active">Home</a> </li>

		</ul>
	</nav> 
</head>

<body>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reponse = $_POST['reponse'];
	$somme = file_get_contents("/tmp/somme");
	$time1 = file_get_contents("/tmp/time1");
	$time2 = microtime(true);
	$time = $time2 - $time1;
	if (intval($reponse) == $somme and $time <= 1) {
		echo("<h3>NBCTF{H3r3_Th3_F4444444444g}</h3>");
	}
	else {
	echo("<br><br><br><h3>Faux ou trop lent !</h3>");
	echo("<h3>Rententer : <a href='/index.php' style='color:blue;'>accueil</a></h3>");
	}
}


?>


	<footer id="contact">
		<p>NoBracketsCTF</p>
	</footer>
</body>

</html>
