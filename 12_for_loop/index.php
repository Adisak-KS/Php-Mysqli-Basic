<?php
    require_once("dbconnect.php");

    $sql = "SELECT * FROM employees";
    $result = mysqli_query($connect, $sql);

    $count = mysqli_num_rows($result); // จำนวนแถวที่ไปดึงมาจาก Database
    
    // echo $count;
   
    for($i = 0; $i < $count; $i++){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        echo "ID : ".   $row["id"] ."<br>";
        echo "Name : " . $row["fname"] ."<br>";
        echo "Surname : " . $row["lname"] ."<br>";
        echo "Garden : " . $row["gender"] ."<br>";
        echo "Skills : " . $row["skills"] ."<br>";
        echo "<hr>";
    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลด้วย For Loop</title>
</head>
<body>
</body>
</html>