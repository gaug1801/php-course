<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    username: <br>
    <input type="text" name="username">
    <br>
    age: <br>
    <input type="text" name="age">
    <br>
    email:
    <br> 
    <input type="text" name="email">
    <input type="submit" name="submit">

  </form>
</body>
</html>
 <?php 
    if (isset($_POST["submit"])) {
      /*    VERIFY AN INPUT - returns an empty string if it doesn't pass the verif. 
      // $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // if the input is NAN return empty.

      // if (empty($age)) {
      //   echo "that number wasn't valid";
      // }
      // else {
      //   echo "You are {$age} years old.";
      // }

      // $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
      // if (empty($email)) {
      //   echo "that email wasn't valid";
      // }
      // else {
      //   echo "Your email is: {$email}";
      // }
      */
      
      /*    SANITIZE AN INPUT - strip certain chars from the input
      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);//$_POST["username"];//Instead of using the $_POST array, use filter_input()
      //filter_input() parameters: INPUT_POST (or GET), name of the input (username), what you want to filter out.
      //In this case we are filtering all speical chars from the input, so we use FILTER_SANITIZE_SPECIAL_CHARS.

      $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
      echo "Your email is: {$email}";
      */
    }


 ?>