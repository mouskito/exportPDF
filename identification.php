<?php session_start(); // utilisation de la session?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //connexion à la base
        include("inc/config.php");
        //création une transaction SQL
        $login = mysql_real_escape_string($_REQUEST["pseudo"]);
        $mdp = mysql_real_escape_string($_REQUEST["mdp"]);
        
       // echo $login;

        //echo $mdp;
        
        $select = "SELECT * FROM user WHERE pseudo ='$login' AND mdp='$mdp'";
        
        $data = mysql_fetch_array(mysql_query($select));
        
      //echo $data;
        // activer la session si la requête SQL dit TRUE
        
        if($data){
           //$_SESSION["admin"] = "yes";
           echo '<script type="text/javascript">alert(" Bienvenue ' . $login . '");window.location.href = "chat.php";</script>'; 
          
        }
       else{
           echo '<script type="text/javascript">alert(" Pseudo ou mot de passe: incorrect. Veuillez reessayer");window.location.href = "index.php";</script>';

           //print ('Vous n\'avez pas le bon mot de passe');
       }
 
        
    /*  if($data){
           // $_SESSION["admin"] = "yes";
          
            header("location:chat.php");
        }
        else{
            header("location:index.php");
        }*/
        ?>
    </body>
</html>
