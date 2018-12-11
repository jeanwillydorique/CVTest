<?php 
  include_once("./templates/header.php")
?>
    <ul class="navbar-right color-grayblue" id="navigation">
      <li><a href="./registerpage.php">Register</a><li>
    </ul>
    
    <div class="title">
      <h1>Création de</h1>
      <h1>CV</h1>
      <h1>en ligne</h1>
    </div>

    <div class="connection">
      <form class="" action="./functions/auth.php" method="post">
        <label for="Nom">Nom d'utilisateur :</label>
        <input type="text" name="name" value="" maxlength="25">
        <label for="password">Mot de passe :</label>
        <input type="text" name="password" value="" maxlength="25">
        <input type="submit" name="" value="Ok!">
      </form>
    </div>


<?php 
  include_once("./templates/footer.php")
?>

