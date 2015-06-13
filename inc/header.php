<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet"  type="text/css" href="css/bootstrap.css" />
         
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
           <script>
               //on charge le DOM avec la fonction anonyme "$(function...
               $(document).ready(function(){     //récupérer le contenu des champs du formulaire
                   $("#button").click(function(){
                   var login = $("#login").val();
                   var pwd = $("#pwd").val();
                      //lancement de la methode$.AJA
                   $.ajax({
                       type:"POST",
                       url:"identification.php",
                       data:{login:login, pwd:pwd}
                   }).done(function(msg){
                       alert(msg);
                        });
                 });
               });
           </script>
      
    </head>
    <body>

       


  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li><a href="chat.php">Chat</a></li>
     
      </ul>

      <div class="nav navbar-nav navbar-right">
          <fieldset>
              
              <form action="identification.php" method="post">
                  <label>
                      Pseudo
                  </label>
            <input type="text" name="pseudo"/>
            
              <label>
                     pass
                  </label>
            <input type="password" name="mdp"/>
            <input type="submit" value="Connexion"/>
            
            </form>

    </fieldset>
            
              <button> <a href="deconnection.php">Deconnection</a></button>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <p>
              <a href="inscription.php">Tu n'es pas encore inscrit !? Clique vite ici ;) !</a>
          </p>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
        <?php
        // put your code here
       

        ?>
    </body>
</html>
