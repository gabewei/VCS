<?php

if(isset($_GET['name'])){
  //print_r($_GET);
  $name = htmlentities($_GET['name']);
  echo $name . " ";
}
/*
if(isset($_POST['name'])){
  print_r($_POST);
  $name = htmlentities($_POST['name']);
  echo $name;
}


if(isset($_REQUEST['name'])){
  //print_r($_REQUEST);
  $name = htmlentities($_REQUEST['name']);
  echo $name;
}

echo $_SERVER['QUERY_STRING'];
*/


if(isset($_GET['email'])){
  //print_r($_GET);
  $email = htmlentities($_GET['email']);
  echo $email;
}
/*
if(isset($_POST['email'])){
  print_r($_POST);
  $email = htmlentities($_POST['email']);
  echo $email;
}


if(isset($_REQUEST['email'])){
  //print_r($_REQUEST);
  $email = htmlentities($_REQUEST['email']);
  echo $email;
}

echo $_SERVER['QUERY_STRING'];
*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Get and Post</title>
  </head>
  <body>
    <h1>Gabe W || 14 December 2018 || P4A</h1>
    <form method = "GET" action="get_post.php">
      <div>
        <label>Name</label><br>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label><br>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">
    </form>
    <ul>
      <li>
        <a href="get_post.php?name=Brad&email=brad%40gmail.com">Brad</a>
      </li>
      <li>
        <a href="get_post.php?name=Steve&email=steve%40gmail.com">Steve</a>
      </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
    <br>
    <hr>
    <br>
  </body>
</html>
