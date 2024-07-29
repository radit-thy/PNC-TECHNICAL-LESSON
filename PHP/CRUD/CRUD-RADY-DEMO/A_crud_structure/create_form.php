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
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <select name="skill" id="" class="form-control">
                            <option value="Book 1">Book 1</option>
                            <option value="Book 2">Book 2</option>
                            <option value="Book 3">Book 3</option>
                            <option value="Book 4">Book 4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control"></textarea>
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