<?php
include("db.php");

$id = $_GET['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];

 $query = mysqli_query($con, "UPDATE user SET fname='$fname', lname='$lname' WHERE id='$id' ") or die();

 header("location: index.php?note = SUccessfully updated");
?>