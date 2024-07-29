<?php require_once 'partials/header.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <div class="card bg-light">
                <div class="card-body">
                    <?php
                    require_once "database.php";
                    $id = $_GET['id'];
                    // echo $id;
                    $statement = $db->prepare("SELECT * FROM posts WHERE id= :id");
                    $statement->execute(['id'=> $id]);
                    $data = $statement->fetch();
                    // var_dump($data);
        
                    ?>
                    <form action="update_action.php" method="POST">
                        <input type="hidden" value="<?=  $data['id']; ?> name="id">
                        <div class="mb-3">
                            <input type="text" value="<?= $data['title']; ?>" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <textarea name="description" value="<?= $data['description']; ?> placeholder="Description" class="form-control"></textarea>
                        </div>
                        <div class="mb-3 d-grid gap-2">
                            <button class="btn btn-warning btn-block">Update Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <?php require_once 'partials/footer.php'; ?>