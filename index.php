<?php
  //you can list a datatype to make sure an unwanted type doesn't go through. an error will be thrown
  function hypotenuse( float $a, float $b) {
    $c = sqrt(($a ** 2) + ($b ** 2));
    return $c;
  }

  echo hypotenuse(4, 5);

  // function is_even($number) {
  //   return $number % 2;
  // }

  // echo is_even(10);


  // function happy_birthday($first_name, $age) {
  //   echo "Happy Birthday dear {$first_name}!<br>";
  //   echo "Happy Birthday to you!<br>";
  //   echo "Happy Birthday dear {$first_name}!<br>";
  //   echo "You are {$age} years old!<br><br>";

  // }

  // happy_birthday("Spongebob", 30);
  // happy_birthday("Patrick", 35);
  // happy_birthday("Squidward", 45);
?>
