<?php
require './functions.php';

$query = 'SELECT * FROM todos';

$todos = query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        body {
            background-color : #4e1458;
        }
    </style>

</head>
<body>
    <div class="jumbotron mx-auto mt-4" style="width: 70%; margin-top: 225px;">

    <?php foreach ($todos as $key => $value): ?>
      <div class="card mt-2 mx-auto" style="width: 70%;">
  <div class="card-body">
    <?= $value['title'] ?> <a href="delete.php?id=<?= $value[
     'id'
 ] ?>" class="float-right deleteData">&times;</a>
    <br>
    <p class="small text-muted"><?= date(
        'Y-m-d H:i:s',
        strtotime($value['created_at'])
    ) ?></p>
  </div>
</div>

    <?php endforeach; ?>
    </div>
</body>
</html>