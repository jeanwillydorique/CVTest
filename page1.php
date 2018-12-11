<?php 
  include_once("./templates/header.php")
?>
    <div class="title">
      <h1>Choisir le modèle que vous voulez utiliser</h1>
    </div>
    <form class="" action="page2.php" method="post">
      <div class="choice">
        <div class="image-choice">
          <div class="cv">
            <a href="img/310x438.png" class="image" target="_blank"><img src="img/155x219.png" alt="CV" title="Cliquez pour agrandir"></a>
            <input type="checkbox" name="v1" value="v1">
          </div>
          <div class="cv">
            <a href="img/310x438.png" class="image" target="_blank"><img src="img/155x219.png" alt="CV" title="Cliquez pour agrandir"></a>
            <input type="checkbox" name="v2" value="v2">
          </div>
        </div>
      </div>
      <div class="choice">
        <div class="image-choice">
          <div class="cv">
            <a href="img/310x438.png" class="image" target="_blank"><img src="img/155x219.png" alt="CV" title="Cliquez pour agrandir"></a>
            <input type="checkbox" name="v3" value="v3">
          </div>
          <div class="cv">
            <a href="img/310x438.png" class="image" target="_blank"><img src="img/155x219.png" alt="CV" title="Cliquez pour agrandir"></a>
            <input type="checkbox" name="v4" value="v4">
          </div>
        </div>
      </div>

      <div class="button">
        <input type="submit" name="" value="Validez!">
      </div>
    </form>

<?php 
  include_once("./templates/footer.php")
?>