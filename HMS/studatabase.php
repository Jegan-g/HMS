<!DOCTYPE html>
<html>
<head>
	<title>Display All Data</title>
</head>

<style>
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  color: darkblue;
}
table{
	margin: 5rem auto;
}
body
      {
         background-image:url('IMAGES/bg.png');
      background-repeat:no repeat;
      background-size: cover;
      background-attachment: fixed;
  
      }
</style>
<body>
	<center>
	<h1>STUDENT DATABASE</h1></center>

	<table>
		<tr>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>REG NO</th>
			<th>PHONE NO</th>
			<th>EMAIL ID</th>
		</tr>

		<?php
			// Establish a connection to the database
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$dbname = 'test';

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Retrieve all the data from the "users" table
			$sql = "SELECT * FROM table__1_ order by(reg_no)";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				// Display each row of data in a table
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row["first_name"] . "</td>";
					echo "<td>" . $row["last_name"] . "</td>";
					echo "<td>" . $row["reg_no"] . "</td>";
					echo "<td>" . $row["phone_no"] . "</td>";
					echo "<td>" . $row["email_id"] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "No results found.";
			}

			mysqli_close($conn);
		?>
	</table>

</body>
</html>
