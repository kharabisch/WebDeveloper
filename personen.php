<?php require("templates/header.php");?>
			<div id='content'>
				<h1>Personen</h1>
				<p>Hier sind die personnen:</p>
<?php 
		require("templates/verdb.php");

		$db_res = runsql( "SELECT `Nom`,`Prenom`,`Age` FROM `personen` ");
			
		echo ('<table>');
		while($row = mysqli_fetch_array($db_res))
		{
			echo("<tr>");
			echo("<td>".$row['Nom']."</td>");
			echo("<td>".$row["Prenom"]."</td>");
			echo("<td>".$row["Age"]."</td>");
			echo("</tr>");
		}
		echo ('</table>');


?>

			</div>
<?php require("templates/footer.php");?>			
	


	
























</html>