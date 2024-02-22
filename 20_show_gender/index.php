<?php
require_once("dbconnect.php");

$sql = "SELECT * FROM employees";
$result = mysqli_query($connect, $sql);

$count = mysqli_num_rows($result); // จำนวนแถวที่ไปดึงมาจาก Database

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลเพศ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
        <hr>
        <?php if ($count > 0) { ?>
            <form action="deleteTextField.php" method="POST">
                <label for="">ID</label>
                <input class="form-control" type="text" placeholder="Enter ID Employee for Delete" name="idemployee">
                <input type="submit" value="Delete" class="btn btn-danger my-2">
            </form>
            <br>

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Gender</th>
                        <th>Skills</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["fname"]; ?></td>
                            <td><?php echo $row["lname"]; ?></td>
                            <td>
                                <?php
                                $gender = $row["gender"];
                                if ($gender == "Male") {
                                    echo "ชาย";
                                } elseif ($gender == "Female") {
                                    echo "หญิง";
                                } else {
                                    echo "อื่น ๆ";
                                }
                                ?>
                            </td>
                            <td><?php echo $row["skills"]; ?></td>
                            <td>
                                <a href="deleteQueryString.php?idemp=<?php echo $row["id"];  ?>" class="btn btn-danger" onclick="return confirm('Do you want delete')" ;>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } else { ?>
            <div class="alert alert-danger">
                <strong>No Employee Information Found.</strong>
            </div>
        <?php } ?>
        <a href="insertForm.php" class="btn btn-success">Add Employee</a>

    </div>
</body>

</html>