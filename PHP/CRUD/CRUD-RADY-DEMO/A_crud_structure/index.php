<?php require_once 'partials/header.php'; ?>
<?php require_once 'database.php'; ?>;

<div class="container mt-5">
    <div class="d-flex justify-content-end align-items-center">
        <a href="create_form.php" class="btn btn-primary btn-sm">Add New +</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Messages</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($infor as $item) :
                // print_r($item['name']);
            ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['email'] ?></td>
                    <td><?= $item['messages'] ?></td>
                    <td>
                        <a href="edit_form.php" class="btn btn-primary btn-sm">Edit</a>
                        <a href="delete_action.php" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>
</div>
<?php require_once 'partials/footer.php'; ?>