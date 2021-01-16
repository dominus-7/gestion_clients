<?php


 $id = $_GET['idd'];
 require_once 'connexion.php';
 $req = "DELETE FROM users WHERE id = ?";
 $stmt = $db->prepare($req);
 $stmt->bindValue(1,$id,PDO::PARAM_INT);
 $stmt->execute();
 header('location:index.php');

?>