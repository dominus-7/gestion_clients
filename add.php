<?php


$nom = $_GET['nom'];
$email = $_GET['email'];
require_once 'connexion.php';
 

 $req = "INSERT INTO users VALUES(null,?,?)";
 $stmt = $db->prepare($req);
 $stmt->bindValue(1,$nom,PDO::PARAM_STR);
 $stmt->bindValue(2,$email,PDO::PARAM_STR);
 $stmt->execute();
 header('location:index.php');

?>