<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
<div class="container">
<?php
   include('header.php');
?>
<a href="create.php">Create New</a>
<form action="display.php" method="post">
    Enter task name 
    <input type="text" name ="textSearch">
    <input type="submit" name="btnSearch" class="btn btn-info" value="Search">  
</form>
<form action="display.php">
    <input type="submit" name="showAll" class="btn btn-success" value="Show All">  
</form>
<?php
    $conn = new mysqli('localhost','root','','todolist');
    $searchtext="";
    if(isset($_POST['btnSearch']))
    {
        $searchtext = $_POST['textSearch'];
        $sql = "SELECT * from task where task_name like '%$searchtext%'";

    }
    else
    {
        $sql = "SELECT * from task";
    }

    $result = $conn->query($sql);
    // Create Table Header
    $list = "<table class='table'>
                <tr>
                    <th>SN</th>
                    <th>Task Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>User ID</th>
                    <th>Action</th>
                <tr>";
    $data = "";
    $sn = 1;
    // Use loop to create tabel rows with data filled in it
    // "fetch_assoc()" fetches next row as associative array at each iteration. 
	// When all row fetched, while loop stops.
    while($row = $result->fetch_assoc()){
        // Concatination of string in PHP using '.'
        $data = $data . "<tr>
                            <td>" . $sn . "</td>" . 
                            "<td>" . $row['task_name'] . "</td>" . 
                            "<td>" . $row['start_date'] . "</td>" . 
                            "<td>" . $row['end_date'] . "</td>" . 
                            "<td>" . $row['user_id'] . "</td>" . 
                            "<td>" . 
                                "<a href='delete.php?id=" . $row['task_id'] . "' class='btn btn-danger'>Delete</a>" . 
                                "<a href='edit.php?id=" . $row['task_id'] . "' class='btn btn-success'>Edit</a>" . 
                            "</td>" . 
                        "</tr>"; 

        $sn++;
    }
    // Concatinating variables and strings finally to display HTML table with data
    echo $list.$data."</table>";
    include "footer.php";
?>
</div>