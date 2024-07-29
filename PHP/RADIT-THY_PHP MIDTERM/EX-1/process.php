<?php
require_once 'templates/header.php';
?>
<!-- TODO WRITE CODE PHP AFTER SUBMIT FORM -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // var_dump($_POST);
    $username = $_POST['username'];
    $bith_day = $_POST['birth_day'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $province = $_POST['province'];
    $gender = $_POST['gender'];
    $subject = $_POST['subjects'];
    $comment = $_POST['comment'];
    
}
?>
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center">
            <p>RESULT</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>Username is:
                        <?php echo $username = $_POST['username']; ?>
                    </p>
                </div>
                <div class="col">
                    <p>Your birth day is:
                        <?php echo $bith_day = $_POST['birth_day']; ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Your email address is:
                        <?php echo $email = $_POST['email']; ?>
                    </p>
                </div>
                <div class="col">
                    <p>Your password is:
                        <?php echo $password = $_POST['password']; ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Your gender is:
                        <?php echo $gender = $_POST['gender']; ?>
                    </p>
                </div>
                <div class="col">
                    <p>Your province is:
                        <?php echo $province = $_POST['province']; ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Your subjects are:
                        <?php echo $subject = $_POST['subjects']; ?>
                    </p>
                </div>
                <div class="col">
                    <p>Your comment is:
                        <?php echo $comment = $_POST['comment']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'templates/header.php';
?>