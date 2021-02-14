<?php

  $conn = mysqli_connect("localhost", "root", null, "comp_1006_lesson_03");
  
  $sql = "SELECT * FROM countries WHERE id = {$_GET["id"]}";
  $result = mysqli_query($conn, $sql);
    //mysqli_fetch_assoc是可以获取选择的哪一行
  $row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Edit Country</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <form action="update.php" method="post">
          <!--这个直接发给了update php，让php知道是哪一个要更改。一定要在form里面-->
        <input type="hidden" name="id" value="<?= $row["id"] ?>">

        <div class="form-group">
          <label>Country Name:</label>
          <input class="form-control" type="text" name="name" value="<?= $row["name"] ?>">
        </div>

        <div class="form-group">
          <label>Country Description:</label>
          <textarea class="form-control" name="description"><?= $row["description"] ?></textarea>
        </div>
        <!--step 1 和 min配合使用，意思只能整数 加1，最小的数不能小于min，在这里不能是负数-->
        <div class="form-group">
          <label>Country Population:</label>
          <input class="form-control" type="number" name="population" step="1" min="0" value="<?= $row["population"] ?>">
        </div>

        <button class="btn btn-primary" type="submit">Create</button>
      </form>
    </div>
  </body>
</html>