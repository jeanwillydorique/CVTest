<?php


$_SESSION['name'] = "Jean-Michel";


function getAllCV() {
  $request = '
  SELECT CVs.name, Skills.name as skills, Education.name as education, Education.content,
  Education.startdate, Education.enddate,
  Hobbies.name as Hobbies, Experiences.name as experience, Experiences.content as experiencecontent,
  Experiences.startdate as experiencestartdate, Experiences.enddate as experienceenddate, User.name,
  User.tel, User.mail, User.age, User.adress, Languages.name as language
  FROM  CVs
  INNER JOIN Education ON Education.id=CVs.education_id
  INNER JOIN Experiences ON Experiences.id=CVs.experience_id
  INNER JOIN Hobbies ON Hobbies.id=CVs.hobby_id
  INNER JOIN Skills ON Skills.id=CVs.skill_id
  INNER JOIN User ON User.id=CVs.user_id
  INNER JOIN Languages ON Languages.id=CVs.language_id
  ';
  $connec = new PDO('mysql:dbname=CV', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare($request);
  $request->execute();
  return $request->fetchAll();
}


function getAllCVs() {
  $request = '
  SELECT CVs.name, GROUP_CONCAT(Education.content) as education,
  GROUP_CONCAT(Languages.name) as languages, 
  FROM  CVs
  INNER JOIN CV_Education ON CVs.id = CV_Education.CV_id
  INNER JOIN Education ON Education.id=CV_Education.Education_id
  INNER JOIN CV_Language ON CVs.id = CV_Language.CV_id
  INNER JOIN Languages ON Languages.id=CV_Language.Language_id
  GROUP BY CVs.id; 
  ';
  $connec = new PDO('mysql:dbname=CV', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare($request);
  $request->execute();
  return $request->fetchAll();
}



// Skills

function getAllSkills() {
  $request = '
  SELECT *
  FROM  Skills
  ';
  $connec = new PDO('mysql:dbname=CV', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare($request);
  $request->execute();
  return $request->fetchAll();
}





// Education

function getAllEducation() {
  $request = '
  SELECT *
  FROM  Education
  ';
  $connec = new PDO('mysql:dbname=CV', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare($request);
  $request->execute();
  return $request->fetchAll();
}



// Hobbies

function getAllHobbies() {
  $request = '
  SELECT *
  FROM  Hobbies
  ';
  $connec = new PDO('mysql:dbname=CV', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare($request);
  $request->execute();
  return $request->fetchAll();
}





// Experiences

function getAllExperiences() {
  $request = '
  SELECT *
  FROM  Experiences
  ';
  $connec = new PDO('mysql:dbname=CV', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare($request);
  $request->execute();
  return $request->fetchAll();
}




// User

function getAllUser() {
  $request = '
  SELECT *
  FROM  User
  ';
  $connec = new PDO('mysql:dbname=CV', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare($request);
  $request->execute();
  return $request->fetchAll();
}
