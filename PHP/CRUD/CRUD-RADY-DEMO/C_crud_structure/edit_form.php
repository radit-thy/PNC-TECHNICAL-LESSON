<?php require_once 'partials/header.php';?>
<div class="container mt-5">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        
        <div class="card bg-light">
            <div class="card-body">
                <?php
                require_once 'database.php';
                $id = $_GET['id'];
                // echo($id);
                $statement = $infor->prepare("SELECT*FROM c_users WHERE id= :id");
                $statement->execute(['id'=> $id]);
                $c_user = $statement->fetch();
                // var_dump($c_user);
                ?>
            <form action="update_action.php" method="POST">
                <input type="hidden" name="id" value="<?= $c_user['id'];?>">
                    <div class="mb-3">
                        <input type="text" value="<?= $c_user['name'];?>" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" value="<?= $c_user['email'];?>" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <textarea value="<?= $c_user['message'];?>" name="message" class="form-control"></textarea>
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
<?php require_once 'partials/footer.php';?>