<?php
require_once '../phpInclude/connect.php';

	$searchPIname = $_POST['searchPIname']; 

		$sql = "SELECT * FROM alien WHERE fname LIKE $searchPIname";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Birthday</th>
			<th>Email</th><th>Phone Number</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Country</th></tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>". $row["IDpersonal"]. "</td><td>". $row["fname"]. "</td><td>". $row["lname"]. "</td><td>"
				. $row["monthBirth"]. "/". $row["dayBirth"]. "/". $row["yearBirth"]. "</td><td>". $row["email"]. "</td><td>"
				. $row["phone"]. "</td><td>". $row["streetAddress"]. "</td><td>". $row["city"]. "</td><td>". $row["stateAddress"]
				. "</td><td>". $row["stateAddress"]. "</td><td>". $row["zip"]. "</td><td>". $row["country"]. "</td></tr>";
			}
		
		} else {
			echo "No results";
		} 
		echo "</table>";
?>