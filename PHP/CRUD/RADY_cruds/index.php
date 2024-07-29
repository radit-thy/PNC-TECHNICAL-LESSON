<?php require_once 'partials/header.php';?>
<div class="container mt-5">
    <div class="d-flex justify-content-end align-items-center">
        <a href="create_form.php" class="btn btn-primary btn-sm">Add New +</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require_once "database.php";
            $statement = $connection->prepare("SELECT * FROM users");
            $statement->execute();
            $users = $statement->fetchAll();
            // var_dump($users);
            foreach ($users as $user) :
            ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['age']; ?></td>
                <td><?= $user['class']; ?></td>
                <td>
                    <a href="edit_form.php?id=<?= $user['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="delete_action.php?id=<?= $user['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require_once 'partials/footer.php';?>