<?php
    require_once("dbconnect.php");

    // echo $_GET["id"];
    $id = $_GET["id"];

    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    // var_dump($row);
    // print_r($row);

    $skill_arr = ["Java", "PHP", "Python", "HTML"];
    // echo $row["skills"]; // string => array //  java,Python => ["Java", "Python"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูลพนักงาน</h2>

        <form action="updateData.php" method="post">
            <input type="hidden" name="id" id="" value="<?php echo $row["id"] ?>">
            <div class="mb-3">
                <label for="firstname">Name : </label>
                <input type="text" name="fname" id="" class="form-control" value="<?php echo $row["fname"]; ?>">
            </div>

            <div class="mb-3">
                <label for="lastname">Surname : </label>
                <input type="text" name="lname" id="" class="form-control" value="<?php echo $row["lname"]; ?>">
            </div>

            <div class="mb-3">
                <label for="gender">Gender : </label>
                <?php 
                    if($row["gender"] == "Male"){
                        echo " <input type='radio' class='form-check-input' name='gender' value='Male' checked> Male";
                        echo " <input type='radio' class='form-check-input' name='gender' value='Female'> Female";
                        echo " <input type='radio' class='form-check-input' name='gender' value='other'> Other";
                    }elseif($row["gender"] == "Female"){
                        echo " <input type='radio' class='form-check-input' name='gender' value='Male'> Male";
                        echo " <input type='radio' class='form-check-input' name='gender' value='Fale'checked> Female";
                        echo " <input type='radio' class='form-check-input' name='gender' value='other'> Other";
                    }else{
                        echo " <input type='radio' class='form-check-input' name='gender' value='Male'> Male";
                        echo " <input type='radio' class='form-check-input' name='gender' value='Fale'> Female";
                        echo " <input type='radio' class='form-check-input' name='gender' value='other' checked> Other";
                    }
                ?>
                 
            </div>

            <div class="mb-3">
                <label for="skill">Skill : </label>
                <?php
                    $skill = explode(",",$row["skills"]); //Array

                    foreach($skill_arr as $value){
                        if(in_array($value, $skill)){
                            echo " <input class='form-check-input' type='checkbox' name='skills[]' value='$value' checked> $value";
                    }else{
                        echo " <input class='form-check-input' type='checkbox' name='skills[]' value='$value'> $value";
                    }
                }
               ?>
              
            </div>

            <hr>
            <input type="submit" value="Update" class="btn btn-success">
            <input type="reset" value="Reset" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">GO BACK</a>
        </form>
        
    </div>
    
</body>

</html>