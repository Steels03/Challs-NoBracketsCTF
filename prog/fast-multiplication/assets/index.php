
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
	<div id="help">
		<p><b>Aide : </b>Voici le calcul que vous devez resoudre, vous avez une seconde pour soumettre votre réponse. Bonne chance !</p>
	</div>

<?php
$randNumber1 = rand(50,100);
$randNumber2 = rand(100,200);
$somme = $randNumber1*$randNumber2;
shell_exec("echo $somme > /tmp/somme");
$time1 = microtime(true);
shell_exec("echo $time1 > /tmp/time1");
echo("<h3>$randNumber1 x $randNumber2</h3>");
?>

	
	<div id="choice">
		<form action="results.php" method="POST" id="form">
			<input class="selection" id="reponse" name="reponse" type="text" placeholder="Réponse"> 
		</form>
		<button type="submit" form="form" class="selection"  id="btn" value="Submit">Submit</button>
	</div>



	<footer id="contact">
		<p>NoBracketsCTF</p>
	</footer>
</body>

</html>
