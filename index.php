<?php
  // strings
  $name = "Gabriel Augustin";
  $food = "Pizza";
  $email = "fake123@gmail.com";

  // ints
  $age = 24;
  $users = 2;
  $quantity = 5;

  // floats
  $gpa = 2.5;
  $price = 5.29;
  $tax_rate = 5.1;

  // boolean
  $employed = true;
  $online = false;
  $for_sale = true;

  // Nothing assigned
  $total = null;

  echo"You have ordered {$quantity} x {$food}s<br>";
  $total = $quantity * $price;
  echo"Your total is \${$total}";
  

  // echo "Hello {$name} <br>";
  // echo "You like {$food} <br>";
  // echo"Your email is {$email}<br>";

  // echo "You are {$age} years old.<br>";
  // echo"There are {$users} users online.<br>";
  // echo"You would like to buy {$quantity} items.";

  // echo"Your GPA is {$gpa}<br>";
  // echo"Your pizza is \${$price}<br>";
  // echo"The sales tax rate is {$tax_rate}%<br>";

  // // If an output is false, nothing is displayed
  // echo"Online Status: {$online}";
  // echo"";
?>