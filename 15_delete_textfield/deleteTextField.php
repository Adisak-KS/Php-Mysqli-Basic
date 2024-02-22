<?php
require_once("dbconnect.php");

$id = $_POST["idemployee"];

$sql = "DELETE FROM employees WHERE id = $id";
$result = mysqli_query($connect, $sql);

if ($result) {
    if (mysqli_affected_rows($connect) > 0) {
        echo "Delete Success <br>";
        echo "<a href ='index.php'>Back to Homepage</a>";
    } else {
        echo "Delete Fail  <br>";
        echo "<a href ='index.php'>Back to Homepage</a>";
    }
} else {
    echo "Delete Fail  <br>";
    echo "<a href ='index.php'>Back to Homepage</a>";
}

// echo $id;
// echo $sql;
