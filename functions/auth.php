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
  $n = count($users);
  $a = 0;

    foreach ($users as $user) {
      $name = $_POST["name"];
      $password = $_POST["password"];
        if (in_array($name, $user) && in_array($password,$user)) {
            return header('Location: ../userlogpage.php');
        }
      };

      return header('Location: ../noregister.php');
 ?>
