<?php
/**
 * Created by JetBrains PhpStorm.
 * User: moussacamara
 * Date: 11/04/14
 * Time: 20:25
 * To change this template use File | Settings | File Templates.
 */

        session_start();
       
?>


<?php
// Connexion à la base de données

include("inc/config.php");
//création une transaction SQL
//$login = mysql_real_escape_string($_REQUEST["pseudo"]);
$mdp = mysql_real_escape_string($_REQUEST["message"]);

 //echo $login;

//echo $mdp;
$pseudo = $_SESSION['pseudo']; 
 echo $pseudo; 
// Insertion du message à l'aide d'une requête préparée
$sql = " INSERT  INTO chatMsg (pseudo, message) VALUES ('$pseudo', '$mdp') " ;

//exécution de la requête SQL:
$requete = mysql_query($sql);

// Redirection du visiteur vers la page du minichat
echo '<script type="text/javascript">window.location.href = "chat.php";</script>';
//header('Location:chat.php');
?>