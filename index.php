<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <!-- By giving all three radios the same name attribute we can select only one at a time. -->
    <input type="radio" name="credit_card" value="Visa"> Visa <br>
    <input type="radio" name="credit_card" value="Mastercard"> Mastercard <br>
    <input type="radio" name="credit_card" value="American Express"> American Express <br>
    <input type="submit" name="confirm" value="Confirm">
  </form>
</body>
</html>

<?php

  if (isset($_POST["confirm"])) { // checks that confirm has been clicked

    $credit_card = null;

    if (isset($_POST["credit_card"])) { // checks if credit card has been selected
      $credit_card = $_POST["credit_card"];
    }
    switch($credit_card) {
      case "Visa":
        echo "You selected Visa.";
        break;
      case "Mastercard":
        echo "You selected Mastercard.";
        break;
      case "American Express":
        echo "You selected American Express.";
        break;
      default:
        echo "Please make a selection.";
        break;
    }
  }
?>