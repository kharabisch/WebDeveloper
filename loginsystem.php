<?php 
    session_start();

    function isteingeloggt()
    {
        if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] ==1   )
        {
            return true;
        }
            return false;
    }
    
    function register($email,$name,$password)
    {
        
        global $db_link;
        mysqli_real_escape_string($db_link,$email);
        mysqli_real_escape_string($db_link,$name);
        $password = md5($password);
        # mysqli_real_escape_string($db_link,$email);
        // Benutzer ist schon registriert???
        $db_res = runsql("SELECT COUNT(*) FROM login WHERE email ='" . $email . "'");
        $row = mysqli_fetch_array($db_res);

        if($row['COUNT(*)']>0)
        {
            return "Diese mail Adresse existiert bereit";

        }

        

        runsql("INSERT INTO login (email, namen, passwort) VALUES ('" . $email . "','" . $name . "','" . $password . "')");
        return 'ok ';
        
        
    }

    function login($email,$password)
    {
        
        global $db_link;
        $email = mysqli_real_escape_string($db_link,$email);
        $password = md5($password);   
        
        $db_res = runsql("SELECT * FROM login WHERE email ='" .$email ."' AND passwort = '" .$password ."' ");
        if (mysqli_num_rows($db_res) ==  0)
        {
            return'Ungültige Eingabe : Email oder Passwort Falsch!!!';
        }
        $row = mysqli_fetch_array($db_res);
        $_SESSION['eingeloggt']=1;
        $_SESSION['namen']= $row['namen'];
        return 'Erfolgreich eingeloggt';
    }
    function logout()
    {
        $_SESSION['eingeloggt'] ='';
    }
?>