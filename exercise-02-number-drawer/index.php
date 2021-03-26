<?php
require_once("action.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donation</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- style -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container">
    <div class="card">

      <div class="card-top">
        <h1>Number drawer</h1>
      </div> <!-- /card-top -->

      <div class="card-body">
        <form action="" method="post">
          <div class="numbers">
            <span><?= $numbers[0] ?></span>
            <span><?= $numbers[1] ?></span>
            <span><?= $numbers[2] ?></span>
            <span><?= $numbers[3] ?></span>
            <span><?= $numbers[4] ?></span>
            <span><?= $numbers[5] ?></span>
          </div> <!-- /numbers -->
          <div class="button-draw">
            <button type="submit" name="drawButton" value="draw">Draw</button>
          </div> <!-- /button-draw -->
        </form> <!-- /form -->
      </div> <!-- /card-body -->
    </div> <!-- /card -->
  </div> <!-- /container -->
</body>

</html>