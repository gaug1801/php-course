<?php 
  //swich = replacement to using many elif statements. less code

  $date = "Monday";

  switch($date) {
    case "Monday":
      echo"I hate mondays.";
      break;
    case "Tuesday":
      echo"It is taco Tuesday.";
      break;
    case "Wednesday":
      echo"The work week is half over.";
      break;
    case "Thursday":
      echo"It's almost the weekend.";
      break;
    case "Friday":
      echo"The weekend is here!";
      break;
    case "Saturday":
      echo"It's time to party!";
      break;
    case "Sunday":
      echo"Time to rest.";
      break;
    default:
      echo"{$date} is not a date.";
      break;
  }


  // $grade = "Pizza";

  // switch($grade){ 
  //   case "A":
  //     echo"You did great.";
  //     break;
  //   case "B":
  //     echo"You did good.";
  //     break;
  //   case "C":
  //     echo"You did okay.";
  //     break;
  //   case "D":
  //     echo"You did poorly.";
  //     break;
  //   case "D":
  //     echo"You failed.";
  //     break;
  //   default:
  //     echo"{$grade} is not valid.";
  // }
?>