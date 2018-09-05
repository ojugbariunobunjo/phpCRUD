<?php
include("db.php");
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM user WHERE id='$id'");
$row = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		body{
			font-family: calibri;
		}
	</style>
</head>
<body>
	<h2>Edit</h2>
	<form method="post" action="update.php?id=<?php echo $id; ?>"> 
 		<p>First Name: <input type="text" name="fname" value="<?php echo $row['fname'] ?>"></p>
 		<p>Last Name: <input type="text" name="lname" value="<?php echo $row['lname'] ?>"></p>
 		<input type="submit" value="Update">
	</form>
	<p><a href="https://www.facebook.com/biggidroid">Follow BiggiDroid Facebook</a> for any usage issues</p>
</body>
</html>