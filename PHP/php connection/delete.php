<?php 
require_once('database.php');
$statement = $db->prepare("DELETE FROM posts WHERE id = :id");
$statement ->execute([
    ':id' => $_GET['id'],
]);
header('Location:index.php');
