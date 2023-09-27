<?php
   include('header.php');
?>
<?php

// $mysqli = new mysqli("localhost","my_user","my_password","my_db");
$conn = new mysqli('localhost','root','','todolist');
$tname = "";
$sdate = "";
$edate = "";
$uid = "";
$id = $_GET["id"];
$sql = "SELECT * from task where id=" . $_GET["id"];
// Run the query and store the result
$result = $conn ->query($sql);
while($row = $result->fetch_assoc()){
    $tname = $row['task_name'];
    $sdate = $row['start_date'];
    $edate = $row['end_date'];
    $uid = $row['user_id'];
}


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

   $sql = "UPDATE task SET task_name='$taskname', start_date='$startdate', end_date='$enddate', user_id='$user' where task_id=" . $_GET["id"];
//    $sql = "UPDATE task SET task_name='" . $taskname . "', start_date='" . $startdate . "', end_date='" . $enddate . "', user_id='" .$user . "' where task_id=". $_GET["id"];
//    $sql = "UPDATE task SET task_name='" . $taskname . "', start_date='" . $startdate . "', end_date='" . $enddate . "', user_id='" .$user . "' where task_id='". $_GET["id"] . "'";
    // $sql = 
   $ret = $conn->query($sql);
   if($ret)
   {
       header("Location:display.php");
   }
   else
   {
      echo "Update Failed";
   }
}

?>
<!-- Link Bootstrap like in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
<h2>Update Form</h2>
<form method="post" action="edit.php?id=<?php echo $_GET['id']; ?>">
    task name <input type="text" name="txttaskname" class="form-control" value="<?php echo $tname?>">
    start date <input type="text" name="txtstartdate" class="form-control" value="<?php echo $sdate?>">
    end date <input type="text" name="txtenddate" class="form-control" value="<?php echo $edate?>">
    user id <input type="number" name="txtuser" class="form-control" value="<?php echo $uid?>">
    <input type="submit" name="btnsave" value="Update" class="btn btn-primary">

</form>

<?php
   include('footer.php');
?>
