<?php
// $mysqli = new mysqli("localhost","my_user","my_password","my_db");
$conn = new mysqli('localhost','root','','todolist');
if($conn->connect_error)
   echo "connection fail";
else
  echo "connection successfully";

// ********** Inserting data in DB manually **********
// $sql = "INSERT INTO task(task_id,task_name,start_date,end_date,user_id,progress,submitted_date) values(1,'feasibility_study','2023-03-21','2023-08-25',1,'20%','2023-09-21')";
// $ret= $conn->query($sql);
// if($ret) echo "<br>inserted successfullt";
// else echo "insert failed";

if(isset($_POST['btnsave'])){
   $taskname = $_POST['txttaskname'];
   $startdate = $_POST['txtstartdate'];
   $enddate = $_POST['txtenddate'];
   $user = $_POST['txtuser'];

   $sql = "INSERT INTO task(task_name, start_date,end_date,user_id) values('$taskname','$startdate','$enddate','$user')";
   $ret = $conn->query($sql);
   if($ret)
   {
      echo "Inserted Successfully";
   }
   else
   {
      echo "Insertion Failed";
   }
}

?>
<!-- Link Bootstrap like in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
<form method="post" action="create.php">
    task name <input type="text" name="txttaskname" class="form-control">
    start date <input type="text" name="txtstartdate" class="form-control">
    end date <input type="text" name="txtenddate" class="form-control">
    user id <input type="number" name="txtuser" class="form-control">
    <input type="submit" name="btnsave" value="save" class="btn btn-primary">

</form>