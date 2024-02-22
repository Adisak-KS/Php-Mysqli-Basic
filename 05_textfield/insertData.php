<?php

    // เชื่อมต่อฐานข้อมูล
    require_once("dbconnect.php");


    // รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"];

    
    // บันทึกข้อมูล
    $sql = "INSERT INTO employees(fname, lname) VALUE('$fname', '$lname')";

    // ทดสอบ
    // echo $sql;

    // สั่งรันคำสั่ง sql  ลง Database
    $result = mysqli_query($connect, $sql);

    if($result){
        echo "Success";
    }else{
        echo mysqli_errno($connect);
    }

?>