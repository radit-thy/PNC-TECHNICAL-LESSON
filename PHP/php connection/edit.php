<?php
require_once 'template/header.php';
require_once('database.php');

$statement = $db->prepare("SELECT * FROM posts WHERE id = :id");
$statement ->execute([
    ':id' => $_GET['id'],
]);
$post = $statement->fetch();
?>
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center">Posts</div>
        <div class="card-body">
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=$post['name']?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"><?=$post['description']?></textarea>
                </div>
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>