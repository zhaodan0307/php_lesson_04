    <!DOCTYPE html>
<html>
  <head>
    <title>New Country</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div class="form-group">
          <label>Country Name:</label>
          <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group">
          <label>Country Description:</label>
          <textarea class="form-control" name="description"></textarea>
        </div>

        <div class="form-group">
          <label>Country Population:</label>
          <input class="form-control" type="number" name="population" step="1" min="0">
        </div>

        <button class="btn btn-primary" type="submit">Create</button>
      </form>
    </div>
  </body>
</html>