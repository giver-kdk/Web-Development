<?php include('header.php');?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
<?php
   $conn = new mysqli('localhost','root','','todolist');
   if(isset($_POST['btnSave']))
    {
        $fullname=$_POST['txtFullName'];
        $email=$_POST['txtEmail'];
        $pass=$_POST['txtPassword'];
        $type=$_POST['ddlUserType'];
    
        $sql="INSERT INTO user(fullname, email, password, user_type) VALUES ('$fullname', '$email', '$pass', '$type')";
        $ret=$conn->query($sql);
        if($ret)
        {
            echo "User Created Successfully....";
        }
        else
        {
            echo "User Creating Failed!!!";
        }
    }
?>
<link rel="stylesheet" href="bootstrap.min.css">
<form method="post" action="usercreate.php">
    Full Name<input type="text" name="txtFullName" class="form-control">
    E-mail<input type="text" name="txtEmail" class="form-control">
    Password<input type="text" name="txtPassword" class="form-control">
    User Type
        <select name="ddlUserType" class="form-control">
            <option value="1">Admin User</option>
            <option value="2">Normal User</option>
        </select>
    <input type="submit" name="btnSave" value="Save" class="btn btn-primary">
</form>

<?php include('footer.php')?>