<?php

        include 'inc/header_con.php';
//session_start(); // utilisation de la session?
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="refresh" content="600">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
          form
          {
                   text-align:center;
              }
         </style>
</head>
<body>


<h1>CECI EST UN TEST </h1>

<div id="templatemo_outer_wrapper">

	
        <div id="templatemo_main">
        	<div id="content_title_box">
            	<h1>Bonjour <?php echo $_SESSION['pseudo']; ?></h1>
               	<em>Bienvenue sur le chat </em>
            </div> <!-- end of featured project -->
        </div> <!-- end of main -->
        
       



            <?php

            include("inc/config.php");

            // Récupération des 10 derniers messages
            $req = "SELECT pseudo, message FROM chatMsg ORDER BY ID ASC LIMIT 0, 30";
            $reponse = mysql_query($req);

            // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                while($donnees = mysql_fetch_array($reponse))
            {
                echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
               // echo date('H:i');
            }

        //mysql_close($reponse);
        ?>
<form action="insertion.php" method="post">
     <p>
         <TEXTAREA name="message" id="message"  COLS=40 placeholder="entrer votre text "></TEXTAREA>
            <input type="submit" value="Envoyer" />
        </p>

      </form>
</div> <!-- end of wrapper --> 
<span> <a class="button impression" href="imprimer.php" target="_blank">Imprimer votre echange</a> </span>

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>