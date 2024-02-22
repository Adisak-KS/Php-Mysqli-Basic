<?php

    require_once("dbconnect.php");
    // echo "Hello QueryString";

    $id = $_GET["idemp"];

    $sql = "DELETE FROM employees WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo "Delete Fail  <br>";
        echo "<a href ='index.php'>Back to Homepage</a>";
    }

?>