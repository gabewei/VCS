<!DOCTYPE html>
</html>
  <body>
    <h1>PHP Queries / Gabe W. / Dec 2018</h1>
    <hr>
    <br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "A4phpvet";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"].
        " <br> First Name: ". $row["firstname"].
        " <br> Last Name: ". $row["lastname"].
        " <br> email: ". $row["email"].
        "<br><br><hr>";
      }
    } else {
      echo "0 results";
    }

    phpinfo();

    $conn->close();
    ?>
  </body>
</html>
