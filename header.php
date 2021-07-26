<?php
    #Besucherzäler
    $handle= fopen("besucher.txt", "r"); 
    $besucherzahl= fgets( $handle);
    fclose($handle);

    $besucherzahl ++; ###$besucherzahl=$besucherzahl+1  genau auch $besucherzahl+=1
    $handle=fopen("besucher.txt","w");
    fwrite($handle,$besucherzahl);
    fclose($handle);



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Test für Praktikum</title>
		<meta name='description' content='praktiseite'/>
		
		<meta charset="UTF-8">
		<link rel='stylesheet'type='text/css' href='style.css'/>
	</head>
		
	<body>
		<div id='wrapper'>
			<header>

			</header>
			<nav>
				<ul>
					<li><a href="index.php">Start</a></li>
					<li><a href="content.php">Content</a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
					<li><a href="personen.php">Personen</a></li>
					<li><a href="login.php">login</a></li>
					<li><a href="geheim.php">Geheim</a></li>

				</ul>
			</nav>