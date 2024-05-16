<?php

  $foods = array("apple", "orange", "banana", "coconut");

  // $foods[0] = "pineapple";
  // array_push($foods, "pineapple", "kiwi"); //add a new variable to the end.
  // array_pop($foods);
  // array_shift($foods); // removes the first variable
  // $foods = array_reverse($foods); //returns a new array, so assign it to a new variable
  // echo count($foods); //array count

  foreach ($foods as $food) {
    echo $food . "<br>";
  }
?>