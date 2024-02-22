<?php
    require_once("dbconnect.php");

    $id = $_POST["id"]; 
    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $emskill = implode(",", $_POST["skills"]); // Array => String

    $sql = "UPDATE employees SET fname = '$fname', lname = '$lname', gender = '$gender', skills = '$emskill' WHERE id = $id";
    // echo $sql;

    $result = mysqli_query($connect, $sql);
    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo mysqli_error($connect);
    }


?>