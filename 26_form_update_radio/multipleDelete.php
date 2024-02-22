<?php

    require_once("dbconnect.php");

    // print_r($_POST["idcheckbok"]);

    $id_arr = $_POST["idcheckbok"];

    $multiple_id = implode(",", $id_arr);
    // var_dump($multiple_id);

    $sql = "DELETE FROM employees WHERE id in ($multiple_id)";
    echo $sql;
    
    $result = mysqli_query($connect, $sql);

    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo "Fail";
    }
?>