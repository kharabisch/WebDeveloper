<?php require("templates/header.php");?>
			<div id='content'>
				<h1>Auswertung</h1>
<?php         
                if(!empty($_POST["username"]) && !empty($_POST["message"]))
                {   # if(empty($_POST["username"]) && empty($_POST["message"])) bedeutet das die variable leer ist
                     #if(isset($_POST["username"]) && isset($_POST["message"]))###########                 Schau ma php.net      ###########################
               

                  echo "<p> Vielen Dank,  "  . $_POST["username"] .   "  Deine Nachricht wurde gesendet !</p>";
                }
                
                else
                {
                    echo "<p>Bitte alle Felder ausfüllen!</p>";
                }

?>
			</div>
<?php require("templates/footer.php");?>			