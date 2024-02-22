<?php

    require_once("dbconnect.php");
    // echo "Hello QueryString";

    $id = $_GET["idemp"];

    $sql = "DELETE FROM employees WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    if($result){
        echo "Delete Success <br>";
        echo "<a href ='index.php'>Back to Homepage</a>";
    }else{
        echo "Delete Fail  <br>";
        echo "<a href ='index.php'>Back to Homepage</a>";
    }

?>