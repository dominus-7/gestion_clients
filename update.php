<?php


$id = $_GET['idd'];
require_once 'connexion.php';
 

 $req = "SELECT * FROM users WHERE id=?";
 $stmt = $db->prepare($req);
 $stmt->bindValue(1,$id,PDO::PARAM_INT);
 $stmt->execute();
 $row = $stmt->fetch(PDO::FETCH_OBJ);

 if (!$row) {
     header('location:index.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="save.php">
        <input type="hidden" name="idd" value="<?=$id ?>">
        <input type="text" name = "nom" placeholder="nom" value="<?= $row->nom?>">
        <input type="email" name = "email" value='<?= $row->email?>'>
        <button>Enregistrer</button>
      </form>
</body>
</html>