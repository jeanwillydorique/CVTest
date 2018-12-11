<?php
  require_once('./functions/function.php');
  require_once('./templates/header.php');

  // variables 
  $name = $_POST['name'];
  $age = $_POST['age'];
  $adress = $_POST['adress'];
  $tel = $_POST['tel'];
  $mail = $_POST['mail'];
  // $competences = $_POST['skillname'];
  $competences = [1,3,4,2,4,6,5,7];
  $centreinterets = $_POST['hobbyname'];
  $langues = $_POST['languagename'];
  $experiences = $_POST['experiencename'];
  $formations = $_POST['educationname'];
  $experiencestartdate = $_POST['experiencestartdate'];
  $experienceenddate = $_POST['experienceenddate'];
  $experiencenamecontent = $_POST['experiencenamecontent'];
  $educationstartdate = $_POST['educationstartdate'];
  $educationenddate = $_POST['educationenddate'];
  $educationcontent = $_POST['educationcontent'];
  $a = 0;
 ?>
    <div class="noms">
        <div class="prenom"><?php echo $name ?></div>
    </div>
  <div class="block">
     <div class="right">
          <div class="infos int">
              <div class="age info"><?php echo $age ?> ans</div>
              <div class="adresse info"><?php echo $adress ?></div>
              <div class="tel info"><?php echo $tel ?></div>
              <div class="mail info"><?php echo $mail ?></div>
          </div>
          <img src="./img/etoile.png" alt="etoile">
          <div id="centreinteret">
            <p class="titre">Centre d'interêts</p>
                <?php foreach ($centreinterets as $key => $centreinteret){
                    echo '<div class="int">' . $centreinteret . '</div>';
                 };?>
          </div>
          <img src="./img/etoile.png" alt="etoile">
          <div id="langue">
            <p class="titre">Langues</p>
            <?php foreach ($langues as $key => $langue):
                echo '<div class="int">' . $langue . '</div>';
            endforeach; ?>
          </div>
     </div>
     <img src="./img/barre.png" alt="barre">
     <div class="left">
          <div id="competences">
            <p class="titre title">Compétences</p>
            <ul class="comp">
              <div class="gauche">
                  <?php
                  if (count($competences) < 4){
                      foreach ($competences as $key => $comp){
                          echo '<li class="int">' . $comp . '</li>';
                        };
                        echo '</div>';
                    }else {
                      echo '</div>';
                      echo '<div class="droite">';
                          for($i = 0; $i < 4; $i++) {
                            echo 'yeah';
                          }
                          for($i = 4; $i >= 4; $i++) {
                              foreach ($competences as $key => $comp){
                                echo '<li class="int">' . $comp . '</li>';
                                };
                            break;
                          };
                        };?>
                </div>
            </ul>
          </div>
          <div id="experience">
            <p class="titre title">Experiences</p>
            <ul class="ForExp">
              <?php foreach ($experiencestartdate as $key => $expstart){
                echo '<li class="int">
                <h4 class="date">' . $expstart;
                };
                foreach ($experienceenddate as $key => $expend){
                  echo '-' . $expend . '</h4>';
                };
                foreach ($experiencenamecontent as $key => $expcont){
                  echo $expcont . '</li>';
                }; ?>
            </ul>
          </div>
          <div id="formations">
            <p class="titre title">Formations</p>
            <ul class="ForExp">
              <?php foreach ($educationstartdate as $key => $formstart){
                echo '<li class="int">
                <h4 class="date">' . $formstart;
                };
                foreach ($educationenddate as $key => $formend){
                  echo '-' . $formend . '</h4>';
                };
                foreach ($educationcontent as $key => $formcont){
                  echo $formcont . '</li>';
                }; ?>
            </ul>
          </div>
      </div>
    </div>


<?php 
  include_once("./templates/footer.php")
?>
