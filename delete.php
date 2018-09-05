<?php

include("db.php");

$id = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM user WHERE id='$id' ") or die();

header("location: index.php?note = Deleted Successfully");

?>