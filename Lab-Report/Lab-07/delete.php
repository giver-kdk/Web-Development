<?php
	$id = $_GET["id"];
	$conn = new mysqli("localhost", "root", "", "user_app");
	if($conn->connect_error) echo "Connection Failed";
	else echo "Connection Success";

	$sql = "DELETE FROM user WHERE user_id=$id";
	$result = $conn->query($sql);
	if(!$result) echo "Deletion Failed";
	else
	{
		echo "Deletion Success";
		header("Location: index.php");
	}
?>