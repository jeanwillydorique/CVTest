<?php 
  include_once("./templates/header.php")
?>


        <form method="post" action="./functions/register.php">
            <label>Nom</label>
            <input type="text" name="name">
            <label>Mots de passe</label>
            <input type="text" name="password">
            <label>Age</label>
            <input type="number" name="age">
            <label>Adresse</label>
            <input type="text" name="adress">
            <label>Tel</label>
            <input type="text" name="tel">
            <label>Mail</label>
            <input type="text" name="mail">
            <input type="submit" value="register !">
        </form>



<?php 
  include_once("./templates/footer.php")
?>