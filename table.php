<?php

$mysqli = mysqli_connect('localhost', 'root', null, 'comp_1006_lesson_03');

  $result = mysqli_query($mysqli, "
    SELECT * FROM countries
  ");

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // var_dump($rows);

?>

<table class="table table-striped my-5">
  <thead>
    <tr>
      <td>Name</td>
      <td>Description</td>
      <td>Population</td>
      <td>Actions</td>
    </tr>
  </thead>

  <tbody>
   <!--foreach 里面，注意那个冒号-->
    <?php foreach($rows as $row): ?>
      <tr>
        <td><?= $row["name"] ?></td>
        <td><?= $row["description"] ?></td>
        <td><?= $row["population"] ?></td>
        <td>
            <!--指向了edit这个页面 -->
          <a href="edit.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure?')">edit</a>
          |
            <!--注意 onclick是JavaScript 停止我们做什么操作-->
          <a href="delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure?')">delete</a>
        </td>
      </tr>
      <!--end表示关闭-->
    <?php endforeach ?>
  </tbody>
</table>