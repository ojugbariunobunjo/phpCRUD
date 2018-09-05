<?php
include("db.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
if (empty($fname)) {
header("location: index.php?note= Invalid First Name"); die();
}
if (empty($lname)) {
header("location: index.php?note= Invalid Last Name"); die();
}
$query = mysqli_query($con, "INSERT INTO user(fname, lname) VALUES('$fname', '$lname')") or die();

mysqli_close($con);

header("location: index.php?note=Success");

?>