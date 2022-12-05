
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
	<script src="main.js"></script>
	<title> APPLICATION TRACEROUTE </title>

		<nav id="menu">

		<h2> APPLICATION TRACEROUTE </h2>
		<ul>
		<li> <a href="#menu" class="active">Home</a> </li>

		</ul>
	</nav> 
</head>

<body>
	<div id="help">
		<p><b>Aide : </b>Veuillez saisir l'IP sur laquelle vous souhaitez effectuer un traceroute.</p>
	</div>

	
	<div id="choice">
		<form action="index.php" method="POST" id="form">
			<input class="selection" id="ip" name="ip" type="text" placeholder="IP"> 
		</form>
		<button type="submit" form="form" class="selection"  id="btn" value="Submit">Submit</button>
	</div>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_SESSION['ip'] = $_POST;
    $cmd = $_POST['ip'];
	$out = shell_exec("traceroute $cmd");
	echo("<br><br><p>$out</p>");
}


?>


	<footer id="contact">
		<p>NoBracketsCTF</p>
	</footer>
</body>

</html>
