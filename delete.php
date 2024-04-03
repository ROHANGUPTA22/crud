<?php
include 'connect.php';
// Check if the 'deleteid' parameter is set in the URL
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result){
        header('location:display.php');
    }else {
        die(mysqli_error($con));
    }
}
?>
