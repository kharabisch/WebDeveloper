<?php
	require("templates/verdb.php");
	require("templates/loginsystem.php");
	require("templates/header.php");
?>	
	<div id='content'>
<?php

			if(isset($_POST['submit']))
			{
				
				if (empty($_POST['email']) || empty($_POST['password']))
					{
					echo('BItte alle felder ausfüllen');
					}
				else
					{
					$erg =login($_POST['email'], $_POST['password']);
					echo('<p>' . $erg . '</p>');	
					}
			}
			else if(isset($_POST['logout']))
			{
				logout();
				echo('<p>Erfolgreich ausgeloggt</p>');
			}
			else if(isteingeloggt())
			{?>
			<p>
				<form action = 'login.php' method='POST'>
					<input type='submit' name='logout' value='ausloggen'/>
			</form>	
			</p>
<?php
			}
			else
			{

			

	
?>
			
				<h1>Login</h1>
				<p>Willkommen zu login. <br/> Sonst bitte <a href="register.php"><input type="Submit" name ="submit"  value="Registrieren"/></a></p>
			<form action="login.php" method="post" >
				<label>Email Adresse :</label>
				<input type="text" name ="email" /> <br/>
				<label>Password      :    </label>
				<input type="password" name ="password" /> <br/>
				<input type="submit" name ="submit"  /> <br/>

			</form>	

			

			
<?php 
	}
?>
		</div>
<?php	
	require("templates/footer.php");
?>			
	


	
























</html>