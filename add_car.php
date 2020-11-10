<?php
 session_start();
  echo $_SESSION['username'];
 echo $_SESSION['password'].'<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add car</title>
</head>
<body>
  <form method="POST" action="./save_car.php">
    <br>
    <label>Name and identification of car</label>
    <input type="text" name="carname" id="carname" class="form-control col-3">
    <br>

    <input type="submit" value="add another car" class="btn btn-primary">
    <input type="button" value="save and go" class="btn btn-primary">
</form>

<ul class="list-group">
  <li class="list-group-item">First item</li>
  <li class="list-group-item">First item</li>

  <li class="list-group-item">First item</li>
  <li class="list-group-item">First item</li>

</ul>
</body>
</body>
</html>