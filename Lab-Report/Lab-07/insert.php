<?php
	if(isset($_GET["submit"]))
	{
		$name = $_GET["username"];
		$pw = $_GET["password"];
		$conn = new mysqli("localhost", "root", "", "user_app");

		if($conn->connect_error) echo "Connection Error";
		else echo "Connection Success";

		$sql = "INSERT INTO user(name, password) values('$name', '$pw')";
		$result = $conn->query($sql);
		if(!$result) echo "Insertion Failed";
		else
		{
			echo "Insertion Success";
			header("Location: index.php");
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Page</title>
</head>
<body>
	<form action="insert.php" method="get">
		<input name="username" type="text" placeholder="Username">
		<input name="password" type="text" placeholder="Password">
		<input name="submit" type="submit" value="Submit">
	</form>
</body>
</html>