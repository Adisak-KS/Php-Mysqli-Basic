<?php
    require_once("dbconnect.php");

    $sql = "SELECT * FROM employees";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);


    // echo gettype($row); // ตรวจสอบประเภท
    // print_r($row); // ดูโครงสร้าง Array

    echo "ID : " . $row["id"]. "<br>";
    echo "Name : " . $row["fname"]. "<br>";
    echo "Surname : " . $row["lname"]. "<br>";
    echo "Garden : " . $row["gender"]. "<br>";
    echo "Skills : " . $row["skills"]. "<br>";
    echo "<hr>";

    $row = mysqli_fetch_assoc($result);
    echo "ID : " . $row["id"]. "<br>";
    echo "Name : " . $row["fname"]. "<br>";
    echo "Surname : " . $row["lname"]. "<br>";
    echo "Garden : " . $row["gender"]. "<br>";
    echo "Skills : " . $row["skills"]. "<br>";
    echo "<hr>";

    $row = mysqli_fetch_assoc($result);
    echo "ID : " . $row["id"]. "<br>";
    echo "Name : " . $row["fname"]. "<br>";
    echo "Surname : " . $row["lname"]. "<br>";
    echo "Garden : " . $row["gender"]. "<br>";
    echo "Skills : " . $row["skills"]. "<br>";
    echo "<hr>";

    $row = mysqli_fetch_assoc($result);
    echo "ID : " . $row["id"]. "<br>";
    echo "Name : " . $row["fname"]. "<br>";
    echo "Surname : " . $row["lname"]. "<br>";
    echo "Garden : " . $row["gender"]. "<br>";
    echo "Skills : " . $row["skills"]. "<br>";
    echo "<hr>";

    $row = mysqli_fetch_assoc($result);
    echo "ID : " . $row["id"]. "<br>";
    echo "Name : " . $row["fname"]. "<br>";
    echo "Surname : " . $row["lname"]. "<br>";
    echo "Garden : " . $row["gender"]. "<br>";
    echo "Skills : " . $row["skills"]. "<br>";
    echo "<hr>";

    $row = mysqli_fetch_assoc($result);
    echo "ID : " . $row["id"]. "<br>";
    echo "Name : " . $row["fname"]. "<br>";
    echo "Surname : " . $row["lname"]. "<br>";
    echo "Garden : " . $row["gender"]. "<br>";
    echo "Skills : " . $row["skills"]. "<br>";
    echo "<hr>";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สอบถามข้อมูล (fetch-assoc)</title>
</head>
<body>
</body>
</html>