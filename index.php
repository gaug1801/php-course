<?php 

  // cookie = Info about a user stored in a user's web-browser
  //          why you receive targeted ads, browsing preferences, and
  //          other non-sensitive data.
  //setcookie(name, value, expiration time, path)
  setcookie("fav_food", "pizza", time() - 0, "/"); //stored as an associative array
  setcookie("fav_drink", "coffee", time() + (86400 * 3 ), "/");
  setcookie("fav_dessert", "ice cream", time() + (86400 * 4 ), "/");

  // to delete a cookie, set the time to time() - 0
  // setcookie("fav_food", "pizza", time() - 0, "/");
  // setcookie("fav_drink", "coffee", time() - 0, "/");
  // setcookie("fav_dessert", "ice cream", time() - 0, "/");

  // Print all value key pairs
  foreach($_COOKIE as $key => $value) {
    echo"{$key} = {$value} <br>";
  }

  if (isset($_COOKIE["fav_food"])) {
    echo"BUY SOME {$_COOKIE["fav_food"]} !!!";
  }
  else {
    echo"I don't know your favorite food.";
  }

?>
