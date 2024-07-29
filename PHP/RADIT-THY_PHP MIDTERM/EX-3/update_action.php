<?php
// Get current date
date_default_timezone_set('Asia/Phnom_Penh');

require_once "database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_POST);
    $title = $_POST['title'];
    $description = $_POST['description'];
    $post_date = $_POST['post_date'];

    $statement = $db->prepare("UPDATE  posts SET title=:title, description=:description, post_date=:post_date) WHERE id=:id");
    $statement->execute([
        ':title'=> $title,
        ':description' => $description,
        ':post_date' => $post_date
    ]);
}
header("Location: index.php");