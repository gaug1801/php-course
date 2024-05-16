<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Enter a country:</label>
    <input type="text" name="country">
    <input type="submit">
  </form>
</body>
</html>

<?php
  //associative array = an array of key=>value pairs
  //countries => capital
  //id => username
  //item => price

  $capitals = array("USA"=>"Washington D.C.", 
                    "Japan"=>"Kyoto", 
                    "South Korea" => "Seoul", 
                    "India"=> "New Delhi");

  
  $capital = $capitals[$_POST["country"]]; //access value

  echo "The capital is " . $capital;



  // $capitals["USA"] = "Las Vegas"; //changing a value
  // $capitals["China"] = "Beijing"; // add new value
  // array_pop($capitals); //remove last element
  // array_shift($capitals);
  // foreach($capitals as $key => $value) {
  //   echo"{$key} = {$value} <br>";
  // }

  // $keys = array_keys($capitals); //get keys -- generates a new array.
  // foreach($keys as $key) {
  //   echo"{$key} <br>";
  // }

  // $values = array_values($capitals); //get values -- generates a new array.
  // foreach($values as $value) {
  //   echo"{$value} <br>";
  // }

  // $capitals = array_flip($capitals); // Flip keys and values around.
  // foreach($capitals as $key => $value) {
  //   echo"{$key} = {$value} <br>";
  // }


  // $capitals = array_reverse($capitals); // Order is now reversed.
  // foreach($capitals as $key => $value) {
  //   echo"{$key} = {$value} <br>";
  // }

  // echo count($capitals);


?>