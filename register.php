<?php
	require("templates/verdb.php");
	require("templates/loginsystem.php");
	require("templates/header.php");
?>
	<div id='content'>
<?php
	if(isset($_POST["submit"]))
	 {
		 
		 if(empty($_POST["email"]) || empty($_POST["name"]) || empty($_POST["password"]))
		 {
			echo("<p>bitte alle felder ausfüllen</p>") ;
		 }
		 else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
		 {
			 echo("<p> Die angegebene Adresse ist ungültig. </p>");
		 }
		 else{
			 $erg=register($_POST["email"],$_POST["name"],$_POST["password"]);
			 echo('<p>' . $erg . '</p>');
		     }
	 }
	 else
	 {

	
?>
			
			<h1>Register</h1>
				<p>Bitte registrieren Sie sich!!!!</p>
			<form action="register.php" method="post" >
				<label>E-mail:</label>
				<input type="text" name ="email" /> <br/>
				<label>Name:</label>
				<input type="text" name ="name" /> <br/>
				<label>Password      :    </label>
				<input type="password" name ="password" /> <br/>
				<input type="submit" name ="submit" /> <br/>

			</form>	
			
<?php		
		}
?>
		</div>
<?php			
	require("templates/footer.php");
	
?>		