<?php
    include_once 'includes/connect.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Website</title>
  </head>
  <body>
<h1>Full Stack: Read our DB, display on HTML / CSS client side</h1>
<h1>Created by Gabriel W. / January 2019</h1>
<?php
    $sql = "SELECT * FROM MyGuests;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo $row['firstname'] . "<br>";
      }

    }
    else {
      echo "No entries found";
    }
 ?>
  </body>
</html>
