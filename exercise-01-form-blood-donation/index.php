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
        <h1>Form for blood donation</h1>
      </div> <!-- /card-top -->

      <div class="card-body">
        <form action="" method="post">

          <label for="birth-date">Birth date</label>
          <input type="date" name="birth-date" id="birth-date"></input>

          <label for="weight">Weight</label>
          <input type="number" name="weight" id="weight" min="1" max="300"></input>

          <div class="buttons">
            <button type="submit" name="operation" value="verify">Verify</button>
            <button type="submit" name="operation" value="clear">Clear</button>
          </div>
        </form>
      </div> <!-- /card-body -->

      <?php
      if (gettype($canDonate) != null) {
        if ($canDonate == "can") {
          echo
          "
            <div class='card-bottom positive'>
              <h2>Congratulations</h2>
              <span>You can be a donator!</span>
            </div>
          ";
        } else if ($canDonate == "cant") {
          echo
          "
            <div class='card-bottom negative'>
              <h2>Too bad</h2>
              <span>You cant be a donator!</span>
            </div>
          ";
        }
      }
      ?>

    </div> <!-- /card -->
  </div> <!-- /container -->

</body>

</html>