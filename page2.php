<?php
  require_once('./functions/function.php');
  require_once('./templates/header.php');


  $CVs = getAllCV();
  $data = getAllCVs();
  var_dump($data);die;
  $skills = getAllSkills();
  $education = getAllEducation();
  $hobbies = getAllHobbies();
  $experiences = getAllExperiences();
  $user = getAllUser();



 echo '<div class="title">';
 echo '<h1>Entrez les informations</h1>';
 echo '</div>';


foreach ($CVs as $cv) {

   // var_dump($cv);die;

   echo '<form class="all" action="./cv1.php" method="post">';
   echo '<div class="first">';

      // info User


     echo '<div class="info">';
     echo '<label for="info">Informations:</label>';
     echo '<input type="text" name="name" value="'. $cv["name"] .'">';
     echo '<input type="number" name="age" value="'. $cv["age"] . '">';
     echo '<input type="text" name="adress" value="'. $cv["adress"] . '">';
     echo '<input type="text" name="tel" value="'. $cv["tel"] . '">';
     echo '<input type="text" name="mail" value="'. $cv["mail"] . '">';
     echo '<input type="submit" name="" value="Modifiez!">';
     echo '</div>';

     //  Formation

     echo '<div class="formation">';
     echo '<label for="formation">Formations:</label>';
     echo '<input type="text" name="educationname[]" value="'. $cv["education"] .'" placeholder="Année">De';
     echo '<input type="number" name="educationstartdate[]" value="'. $cv["startdate"] .'" placeholder="Année">A';
     echo '<input type="number" name="educationenddate[]" value="'. $cv["enddate"] .'" placeholder="Année">Content';
     echo '<input type="text" name="educationcontent[]" value="'. $cv["content"] .'"placeholder="">';
     echo '<input type="submit" name="" value="Modifiez!">';
     echo '</div>';

   echo '</div>';



 echo '<div class="second">';

   //  Competences

   echo '<div class="competences">';
   echo '<label for="competences">Compétences:</label>';
   echo '<input type="text" name="skillname[]" value="'. $cv["skills"] .'" placeholder="Année">';
   echo '<input type="submit" name="" value="Modifiez!">';
   echo '</div>';

   //  Formation

   echo '<div class="experience">';
   echo '<label for="experience">Experience:</label>';
   echo '<input type="text" name="experiencename[]" value="'. $cv["experience"] .'" placeholder="Année">De';
   echo '<input type="number" name="experiencestartdate[]" value="'. $cv["experiencestartdate"] .'" placeholder="Année">A';
   echo '<input type="number" name="experienceenddate[]" value="'. $cv["experienceenddate"] .'" placeholder="Année">Content';
   echo '<input type="text" name="experiencenamecontent[]" value="'. $cv["experiencecontent"] .'"placeholder="">';
   echo '<input type="submit" name="" value="Modifiez!">';
   echo '</div>';

 echo '</div>';


echo '<div class="third">';

  // Hobbies

  echo '<div class="interest">';
  echo '<label for="interest">Centre d\'interêts:</label>';
  echo '<input type="text" name="hobbyname[]" value="'. $cv["Hobbies"] .'" placeholder="name">';
  echo '<input type="submit" name="" value="Modifiez!">';
  echo '</div>';


  // Languages

  echo '<div class="interest">';
  echo '<label for="langues">Langues:</label>';
  echo '<input type="text" name="languagename[]" value="'. $cv["language"] .'" placeholder="name">';
  echo '<input type="submit" name="" value="Modifiez!">';
  echo '</div>';
  echo '</div>';
  echo '<input type="submit" name="" value="Validez!">';
  echo '</form>';



};

include_once("./templates/footer.php")

?>
