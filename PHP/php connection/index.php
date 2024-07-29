<?php
require_once('template/header.php');
require_once('database.php');

$statement = $db->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $statement = $db->prepare("INSERT INTO posts (name, description) VALUES (:name, :description)");
    $statement->execute([
        ':name' => $name,
        ':description' => $description, 
    ]);
    header('Location:index.php');
}

?>

<div class="container mt-3">
    <a href="create.php" class="btn btn-primary">Add New Post</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $key => $post):
                ?>
                <tr>
                    <th scope="row">
                        <?= $key + 1 ?>
                    </th>
                    <td>
                        <?= $post['name'] ?>
                    </td>
                    <td>
                        <?= $post['description'] ?>
                    </td>
                    <td>
                        <a href="delete.php?id=<?= $post['id'] ?>">delete</a>|
                        <a href="edit.php?id=<?= $post['id'] ?>">edit</a>
                    </td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
    </table>
</div>