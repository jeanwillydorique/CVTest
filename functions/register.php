<?php


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

$users = getAllUser();
$userName = $_POST['name'];
$userPassword = $_POST['password'];
$userAge = $_POST['age'];
$userAdress = $_POST['adress'];
$userTel = $_POST['tel'];

//validator mail 
$string = $_POST['mail'];
$findme   = '@';
$pos = strpos($string, $findme);

// if ($pos === false){
//  var_dump("il n'y est pas");die;
// } else {
//   var_dump("il y est");die;
// };
$userMail = $_POST['mail'];

// foreach ($users as $key => $user) {

//   if ( $userName === $user["name"]){
//     var_dump("Oui");die;

    // connection de la DB et insertion de l'user

    $connec = new PDO('mysql:dbname=CV', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('INSERT INTO User (name, password, age, adress, tel, mail) VALUES (:name, :password, :age, :adress, 
    :tel, :mail)');
    $request->execute([
      ":name" => $userName,
      ":password" => $userPassword,
      ":age" => $userAge,
      ":adress" => $userAdress,
      ":tel" => $userTel,
      ":mail" => $userMail,
    ]);

    // insert CV
    $id = $connec->lastInsertId();

    $new = new PDO('mysql:dbname=CV', 'root', '0000');
    $new->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = $new->prepare('INSERT INTO CVs (user_id) VALUES (:id)');
    $req->execute([
      ":id" => $id,
    ]);
    echo "ça fonctionne";
//   } 
//   else {
//     var_dump("non");die;
//   }
// };
  return header('Location: ../home.php');

?>
