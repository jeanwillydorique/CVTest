<?php
  function updateOneProduct($id, $product, $quantity, $availability, $type) {
    $connec = new PDO('mysql:dbname=library', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('UPDATE products SET name = :product, quantity = :quantity, disponibility = :availability, type_id = :type WHERE id = :id;');
    $request->execute([
      ":id" => $id,
      ":product" => $product,
      ":quantity" => $quantity,
      ":availability" => $availability,
      ":type" => $type,
    ]);
  }
  function getAllProducts() {
    $connec = new PDO('mysql:dbname=library', 'root', '0000');
    $request = $connec->prepare('SELECT products.id, products.name AS "product", disponibility, quantity, types.name AS "type" FROM products INNER JOIN types ON types.id=products.type_id;');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request->execute();
    return $request->fetchAll();
  }
  function getOneProduct($id) {
    $connec = new PDO('mysql:dbname=library', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('SELECT products.id, products.name AS "product", disponibility, quantity, types.name AS "type" FROM products INNER JOIN types ON types.id=products.type_id WHERE products.id = :id;');
    $request->execute([
      ":id" => $id,
    ]);
    return $request->fetch();
  }
  function getAllTypes() {
    $connec = new PDO('mysql:dbname=library', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('SELECT * FROM types');
    $request->execute();
    return $request->fetchAll();
  }
  function insertOneProduct($product, $quantity, $availability, $type) {
    $connec = new PDO('mysql:dbname=library', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('INSERT INTO products (name, quantity, disponibility, type_id) VALUES (:name, :quantity, :availability, :type)');
    $request->execute([
      ":name" => $product,
      ":quantity" => $quantity,
      ":availability" => $availability,
      ":type" => $type,
    ]);
  }
  function deleteOneProduct($product_id) {
    $connec = new PDO('mysql:dbname=library', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('DELETE FROM products WHERE id = :id');
    $request->execute([
      ":id" => $product_id,
    ]);
  }
