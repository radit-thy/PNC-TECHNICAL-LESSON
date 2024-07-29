
<?php
require_once('tamplate/header.php');
?>

<div class="container mt-3">


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Login
  </button>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">POS SyStem</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="action.php" method="post">
          <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="mb-3 d-grid gap-2">
            <button class="btn btn-info btn-block">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
require_once('tamplate/footer.php');
?>