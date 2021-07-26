<?php
    $db_link = mysqli_connect("localhost", "root","","testfuerpraktikum");
   if($db_link)
     {
       #echo ( "<P> Verbindung hergestellt</p>");
    }
    else{
       echo ( "<p> Fehler mit der verbindung zu der Datenbank</p>");
     }

        if(!$db_link)
        {
            die("<p>Verbindung kann leider nicht hergestellt werden</p>");    ##### die steht für alles abbrechen dannach kann nichts mehr kommen ######
        }

        function runsql($sql)
        {

          global $db_link;
          $db_res= mysqli_query($db_link,$sql) or die ("SQL-Abfrage :" . $sql . ",Fehler:" . mysqli_error($db_link));
          return $db_res;
        }

?>