<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- method="get" will display the information being passed to php in the url!!! NOT SECURE -->
   <form action="index.php" method="post">   <!-- Here we are sending the code back to the same file but for the php section to work with.-->
  <label>username:</label><br>
  <input type="text" name="username"><br>
  <label>password:</label><br>
  <input type="password" name="password"><br>
  <button type="submit" value="Log in">Log in </button>
  </form>
</body>
</html>

<?php
  echo "{$_POST["username"]} <br>";
  echo "{$_POST["password"]} <br>";


// $_GET, $_POST = Special variable used to collect data from an HTML
//                 form data is sent to the file in the action attribute
//                 of <form>: <form action="some_file.php" method="get">

// $_GET = Data is appended to the url
//         NOT SECURE
//         char limit
//         Bookmark is possible with values
//         GET requests can be cached
//         Better for a search page

// $_POST = Data is packaged inside the body of a HTTP request
//          MORE SECURE
//          No data limit
//          Cannot bookmark
//          GET requests are not cached
//          Better for submitting credentials



?>