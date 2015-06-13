<?php
    if (!empty($_POST) && isset($_POST['pseudo'])){

        session_start();
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header('Location: chat.php');
    }
?>

<!DOCTYPE html>


        <link rel="stylesheet"  type="text/css" href="css/style.css" />
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="menu">
            <center>
           <h1>Bienvenue Sur le tchat </h1>
           <em> Retrouvez nos amis </em>
       </center>


 <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      

      <div class="nav navbar-nav navbar-right">
       
              
              <form action="index.php" method="post" id='form'>

                                        <fieldset>
                                        <legend>Connexion &agrave; la zone membre :</legend>
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

</div>
    </body>
    
        <?php
        require_once 'inc/footer.php';
    ?>
</html>
