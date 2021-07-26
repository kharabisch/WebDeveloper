<?php 
	

	require("templates/loginsystem.php");
	require("templates/header.php");
?>
			<div id='content'>
				<h1>Geheim</h1>
<?php
		if(isteingeloggt())
		{
			echo('<p> Hallo '  .  $_SESSION['namen']  . ' !</p>');
		}
		else
		{
			echo('<p>Diese Seite ist nur für eingeloggte Nutzer</p>');
		}
				
				
				
?>				
			</div>
<?php 
	require("templates/footer.php");
?>			
	


	
























</html>