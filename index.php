<?php 
  $hours = 50;
  $rate = 15;
  $weekly_pay = null;
  if ($hours <= 0) {
    $weekly_pay = 0;
  }
  elseif ($hours <= 40) {
    $weekly_pay = $hours * $rate;
  }
  else {
    $weekly_pay = ($rate * 40) + (($hours - 40) * $rate * 1.5);
  }

  echo"You made \${$weekly_pay} this week.";

  // $adult = true;

  // if ($adult) {
  //   echo"You may enter this site.";
  // }
  // else {
  //   echo"You must be an adult to enter.";
  // }

  // $age = 21;

  // if($age >= 100) {
  //   echo"You are too old to enter this site.";
  // }
  // elseif ($age >= 18) {
  //   echo"You may enter this site.";
  // }
  // elseif ($age < 0) {
  //   echo"that is not a valid age.";
  // }
  // else {
  //   echo"You must be 18+ to enter.";
  // }

?>