<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลพนักงาน</title>
</head>
<body>
    <h2>แบบฟอร์มบันทึกข้อมูลพนักงาน</h2>
    <form action="insertData.php" method="post">
        <div>
           <label for="">Name : </label>
           <input type="text" name="fname" id=""> 
        </div>

        <div>
           <label for="">Surname : </label>
           <input type="text" name="lname" id=""> 
        </div>

        <input type="submit" value="Submit">

    </form>

    <a href="index.php">กลับหน้าแรก</a>
</body>
</html>