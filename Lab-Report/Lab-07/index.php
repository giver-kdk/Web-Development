<!-- Create an application for user registration form using PHP.
(a) Insert the value of the form after button click
(b) Display the records in page
(c) Delete the selected record of the list
(d) Update the selected record from the list -->
<?php 
	echo "Welcome to User Application";
	echo "<a href='insert.php'>
			<button>Insert New</button>
		</a>";
?>
<?php 
	$conn = new mysqli("localhost", "root", "", "user_app");
	if($conn->connect_error) echo "Connection Failed";
	else echo "Connection Success";

	$sql = "SELECT * FROM user";
	$result = $conn->query($sql);
	if(!$result) echo "Query Failed";
	else 
	{
		echo "Query Success";
		$list = "<table>
						<tr>
							<th>Name</th>
							<th>Password</th>
							<th>Action</th>
						</tr>";
		while($row = $result->fetch_assoc())
		{
			$list = $list . "<tr>
								<td>" . $row['name'] ."</td>
								<td>" . $row["password"] . "</td>
								<td>
									<a href='update.php?id=" . $row["user_id"] . "'>
										<button>Edit</button>
									</a>
									<a href='delete.php?id=" . $row["user_id"] . "'>
										<button>Delete</button>
									</a>
								</td>
							</tr>";
		}
		$list = $list . "</table>";
		echo $list;
	}




?>