<?php
    require_once("dbconnect.php");

    $sql = "SELECT * FROM employees";
    $result = mysqli_query($connect, $sql);

    // echo gettype($row); // ตรวจสอบประเภท


    // ใช้แบบตัวเลข Index
    $row1 = mysqli_fetch_array($result, MYSQLI_NUM);    
    print_r($row1); // ดูโครงสร้าง Array
    echo "<br>";
    echo "ID : " . $row1[0]. "<br>";
    echo "Name : " . $row1[1]. "<br>";
    echo "Surname : " . $row1[2]. "<br>";
    echo "Garden : " . $row1[3]. "<br>";
    echo "Skills : " . $row1[4]. "<br>";
    echo "<hr>";

    // ใช้แบบตัวอักษร
    $row2 = mysqli_fetch_array($result, MYSQLI_ASSOC);   
    print_r($row2); // ดูโครงสร้าง Array
    echo "<br>";
    echo "ID : " . $row2["id"]. "<br>";
    echo "Name : " . $row2["fname"]. "<br>";
    echo "Surname : " . $row2["lname"]. "<br>";
    echo "Garden : " . $row2["gender"]. "<br>";
    echo "Skills : " . $row2["skills"]. "<br>";
    echo "<hr>";
    
    // ใช้ทั้ง 2 แบบ
    $row3 = mysqli_fetch_array($result, MYSQLI_BOTH);   
    print_r($row3); // ดูโครงสร้าง Array
    echo "<br>";
    echo "ID : " . $row3[0]. "<br>";
    echo "Name : " . $row3[1]. "<br>";
    echo "Surname : " . $row3["lname"]. "<br>";
    echo "Garden : " . $row3["gender"]. "<br>";
    echo "Skills : " . $row3["skills"]. "<br>";
    echo "<hr>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สอบถามข้อมูล (fetch-array)</title>
</head>
<body>
</body>
</html>