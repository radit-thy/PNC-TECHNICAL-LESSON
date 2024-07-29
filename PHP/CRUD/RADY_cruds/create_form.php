<?php require_once 'partials/header.php';?>
<div class="container mt-5">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        
        <div class="card bg-light">
            <div class="card-body">
                <form action="create_action.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input type="number" name="age" class="form-control" placeholder="Age">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="class" class="form-control" placeholder="Class">
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-primary btn-block">Add New</button>
                    </div>
                </form>
        </div>
    </div>
    <div class="col-3"></div>
   </div>
</div>
<?php require_once 'partials/footer.php';?>