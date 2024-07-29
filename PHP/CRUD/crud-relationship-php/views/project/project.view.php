<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<a href="/views/project/project.create.view.php" class="btn btn-primary mt-2">Add Project</a>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Post</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($projects as $index => $project) : ?>
      <tr>
        <th scope="row"><?= $index+1 ?></th>
        <td><?= $project['name'] ?></td>
        <td><?= $project['title'] ?></td>
        <td>
          <a href="../../controllers/project/project.edit.controller.php?id=<?=$project['id']?>">edit</a> |
          <a href="../../controllers/project/project.delete.controller.php?id=<?=$project['id']?>">delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php require "views/partials/footer.php" ?>