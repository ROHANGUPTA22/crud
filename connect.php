<?php
// Establish a connection to the mysql database!!
$con=new mysqli('localhost','root','','crudoperation');
// Checking if the connection was successful!!
if(!$con){
    die(mysqli_error($con));
}
?>