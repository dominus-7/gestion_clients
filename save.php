<?php

$id = $_GET['idd'];
$nom = $_GET['nom'];
$email = $_GET['email'];
require_once 'connexion.php';
 

 $req = "UPDATE users SET nom=:n ,email=:e WHERE id=:i";
 $stmt = $db->prepare($req);
 $stmt->bindValue(n,$nom,PDO::PARAM_STR);
 $stmt->bindValue(e,$email,PDO::PARAM_STR);
 $stmt->bindValue(i,$id,PDO::PARAM_INT);
 $stmt->execute();
 header('location:index.php');

?>