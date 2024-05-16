<?php 
  $child = false;
  $senior = true;
  $ticket = null;

  if ($child || $senior) {
    $ticket = 10;
  }
  else {
    $ticket = 15;
  }

  echo "The ticket price is \${$ticket}";

  // $age = 12;
  // $citizen = true;
  // if (!($age >= 18) || (!$citizen)) {
  //   echo"You cannot vote.";
  // }
  // else {
  //   echo"You can vote.";
  // }

  // $temp = 15;
  // $cloud = true;

  // if($temp < 0 || $temp > 30) {
  //   echo"The weather is bad.<br>";
  // }
  // else {
  //   echo"The weather is good.<br>";
  // }

  // if (!$cloudy) {
  //   echo"It's sunny.";
  // }
  // else {
  //   echo"It's cloudy.";
  // }

?>