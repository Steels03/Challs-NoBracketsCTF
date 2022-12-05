<?php
session_start();

?>

<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
	<title> REBUS </title>

		<nav id="menu">

		<h2> REBUS </h2>
		<ul>
		<li><a href="index.php">Page d'accueil</a></li>
	    <li><a href="index.php?page=rebus.php">Rébus</a></li>

		</ul>
	</nav> 
</head>

<body>
<?php
if(!isset($_GET['page']) || ($_GET['page']=="index.php")) {
   echo "<p><b>Bienvenue ! </b>Vous trouverez sur ce site un rébus vous permettant de vous aiguiller dans votre de recherche du flag.</p><br>
   <p>La rébus est disponible sur cette page : <a href='index.php?page=rebus.php' style='color:#1a3a6f'>Rébus</a>";
}
else {
    if ($_GET['page']=="rebus.php" || $_GET['page']=="main.css" || $_GET['page']=="rebus.png" || $_GET['page']=="flag") {
    	include("./".$_GET['page']);
	}
	else {
		echo "<p>Access denied.</p>";
	}
}

?>
</body>

<footer id="contact">
	<p>NoBracketsCTF</p>
</footer>

</html>
