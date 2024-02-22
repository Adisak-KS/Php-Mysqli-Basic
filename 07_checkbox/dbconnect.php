<?php

    // ทำการเชื่อมต่อฐานข้อมูล
    $connect = mysqli_connect("localhost", "root", "123", "mydata");

    // ตรวจสอบว่าการเชื่อมต่อมีปัญหาหรือไม่
    /*
    if (!$con) {
        die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_error());
    } else {
        echo "เชื่อมต่อสำเร็จ";
    }
    */
?>