<?php
	$id = $_GET["id"];
	$name = "";
	$pw = "";
	$conn = new mysqli("localhost", "root", "", "user_app");
	if($conn->connect_error) echo "Connection Failed";
	else echo "Connection Success";

	$sql = "SELECT * FROM user WHERE user_id=$id";
	$result = $conn->query($sql);
	if(!$result) echo "Query Failed";
	else 
	{
		while($row = $result->fetch_assoc())
		{
			$name = $row["name"];
			$pw = $row["password"];
		}
	}
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$pw = $_POST["password"];
		$sql = "UPDATE user SET name='$name', password='$pw' WHERE user_id=$id";
		$result = $conn->query($sql);

		if(!$result) echo "Update Failed";
		else 
		{
			echo "Update Success";
			header("Location: index.php");
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Page</title>
</head>
<body>
	<form action="update.php?id=<?php echo $id?>" method="post">
		<input name="name" type="text" placeholder="Username" value="<?php echo $name?>">
		<input name="password" type="text" placeholder="Password" value="<?php echo $pw?>">
		<input name="submit" type="submit" value="Update">
	</form>
</body>
</html>