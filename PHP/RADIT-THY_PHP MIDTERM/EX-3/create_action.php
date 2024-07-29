<?php
// Get current date
date_default_timezone_set('Asia/Phnom_Penh');

require_once "database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $post_date = $_POST['post_date'];
    // var_dump($_POST);

    $statement = $db->prepare("INSERT INTO posts ( title,description,post_date) VALUES(:title, :description,:post_date)");
    $statement->execute([
        ':title'=> $title,
        ':description' => $description,
        ':post_date' => $post_date
    ]);
}
header("Location: index.php");
