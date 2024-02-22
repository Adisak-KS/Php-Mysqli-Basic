<?php
    require_once("dbconnect.php");

    $sql = "SELECT * FROM employees";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_row($result);


    // echo gettype($row); // ตรวจสอบประเภท
    // print_r($row); // ดูโครงสร้าง Array

    echo "ID : " . $row[0]. "<br>";
    echo "Name : " . $row[1]. "<br>";
    echo "Surname : " . $row[2]. "<br>";
    echo "Garden : " . $row[3]. "<br>";
    echo "Skills : " . $row[4]. "<br>";
    echo "<hr>";

    $row = mysqli_fetch_row($result);
    echo "Name : " . $row[1]. "<br>";
    echo "Surname : " . $row[2]. "<br>";
    echo "Garden : " . $row[3]. "<br>";
    echo "Skills : " . $row[4]. "<br>";
    echo "<hr>";

    $row = mysqli_fetch_row($result);
    echo "Name : " . $row[1]. "<br>";
    echo "Surname : " . $row[2]. "<br>";
    echo "Garden : " . $row[3]. "<br>";
    echo "Skills : " . $row[4]. "<br>";
    echo "<hr>";

    $row = mysqli_fetch_row($result);
    echo "Name : " . $row[1]. "<br>";
    echo "Surname : " . $row[2]. "<br>";
    echo "Garden : " . $row[3]. "<br>";
    echo "Skills : " . $row[4]. "<br>";
    echo "<hr>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สอบถามข้อมูล (fetch-row)</title>
</head>
<body>
</body>
</html>