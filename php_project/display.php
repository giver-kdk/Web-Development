<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
<?php
    $conn = new mysqli('localhost','root','','todolist');
    $sql = "SELECT * from task";

    $result = $conn ->query($sql);
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
    $s = 1;
    while($row = $result->fetch_assoc()){
        // Concatination of string in PHP
        $data = $data . "<tr>
                            <td>".$s."</td><td>" . 
                            $row['task_name']. "</td><td>" . 
                            $row['start_date']. "</td><td>" . 
                            $row['end_date']. "</td><td>" . 
                            $row['user_id']. "</td><td><a href='delete.php?id=" . 
                            $row['task_id']."' class='btn btn-danger'>Delete</a>
                            <a href='edit.php?id=" . $row['task_id'] . "' class='btn btn-success'>Edit</a>
                            <td></tr>"; 

        $s++;
    }
    echo $list.$data."</table>";
?>