<?php

    // เชื่อมต่อฐานข้อมูล
    require_once("dbconnect.php");


    // รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $emskill = implode(",", $_POST["skills"]); // Array => String


    // echo $gender;
    // print_r($skills);
    //echo $emskill;

    
    // บันทึกข้อมูล
    $sql = "INSERT INTO employees(fname, lname, gender, skills) VALUE('$fname', '$lname', '$gender', '$emskill')";

    // ทดสอบ
    // echo $sql;

    // สั่งรันคำสั่ง sql  ลง Database
    $result = mysqli_query($connect, $sql);

    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo mysqli_error($connect);
    }

?>