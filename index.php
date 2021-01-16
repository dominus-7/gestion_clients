<?php



require_once 'connexion.php';
$req = "SELECT * FROM users";
$stmt = $db->query($req);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);






    
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acces Base de Donnees</title>
</head>
<body>
    <h1>Users</h1>
    <form action="add.php">
        <input type="text" name = "nom" placeholder="nom">
        <input type="email" name = "email">
        <button>Envoyer</button>
    </form>
    <br>
    <table border = "1" width = "100%" cellpadding = "6">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th colspan="2">ACTION</th>
        </tr>
        <?php foreach($rows as $row): ?>
            <tr>
                <td align = "right"><?= $row['id']; ?> </td>
                <td><?= $row['nom']; ?> </td>
                <td><?= $row['email']; ?> </td>
                <td><a href = "delete.php?idd=<?= $row['id']; ?>">Supprimer</a></td>
                <td><a href = "update.php?idd=<?= $row['id']; ?>">Modifier</a></td>
            </tr>

        <?php endforeach ;   ?>
    </table>
</body>
</html>


