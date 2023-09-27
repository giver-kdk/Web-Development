<?php
    $conn = new mysqli('localhost', 'root', '', 'todolist');
    $id = $_GET["id"];
    $sql = "DELETE FROM task WHERE task_ID=" . $id;


    $ret = $conn->query($sql);
    if($ret)
    {
        header("Location:display.php");
    }
    // display
?>