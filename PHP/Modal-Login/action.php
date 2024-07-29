<?php
require_once('tamplate/header.php');
require_once 'database.php';
?>

<?php

date_default_timezone_set("Asia/Phnom_Penh");
// print_r(getdate());
// $fulltime = getdate();
// $weekday = $fulltime['weekday'];
// $month = $fulltime['month'];
// $year = $fulltime['year'];
// $wday = $fulltime['wday'];
// $fulltime = $weekday."-".$month."-".$year."-".$wday;


$statement = $modals_db->prepare("SELECT*FROM students");
$statement->execute();
$users = $statement->fetchAll();
// print_r($users);
?>

<div class="container mt-5">
    <form action="" method="post">
        <table class="table table-striped ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Password</th>
                    <th scope="col">Date</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($users as $user):
                ?>
                    <tr>
                        <td><?= $user['name'];?></td>
                        <td><?= $user['password'];?></td>
                        <td><?= $user['date'];?></td>
                        <td>
                            <a href="remove.php?=<?= $user['id'];?>" class="bg-danger text-light border border1 px-2  py-1 ">delete</a>||
                            <a href="" class="bg-primary text-light border border1 px-2 py-1 ">edit</a>
                        </td>
                    </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </form>
</div>


<?php
require_once('tamplate/footer.php');
?>