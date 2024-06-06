<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!--$_SERVER["PHP_SELF"] directs the form to itself. Useful in case of filename changes.  -->
  <!-- htmlspecialchars() protects from cross-site scripts. -->
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    username:<br>
    <input type="text" name="username">
    <input type="submit">
  </form>
</body>
</html>
<?php 
  // $_SERVER = SGB that contains headers, paths, and script locations.
  //            The entries in this array are created by the web server.
  //            Shows nearly everything you need to know about the current web page environment

  // PHP_SELF = the location of this webpage
  // REQUEST METHOD = either GET or POST. The default is get. If we have an html form that has the method post, the request method will be POST.

  foreach($_SERVER as $key => $value) {
    echo"{$key} = {$value} <br>";
  }

  //This is the better way to make sure the user has submitted an input.
  // In older systems, it is easy to get around pressing the designated button
  // to submit. This is more robust.
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo"Hello";
  }

?>