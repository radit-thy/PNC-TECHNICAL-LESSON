<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (isset($_POST['id'])) {
        $statement = $db->prepare("UPDATE posts SET name = :name, description = :description WHERE id = :id");
        $statement->execute([
            ':name' => $name,
            ':description' => $description,
            ':id' => $_POST['id'],
        ]);
    }
}

header('Location:index.php');