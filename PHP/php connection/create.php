<?php
require_once 'template/header.php';
?>
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center">Posts</div>
        <div class="card-body">
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" rows="3"name="description"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Add New</button>
                </div>
            </form>
        </div>
    </div>
</div>