<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>
	body{
		font-family: calibri;
	}
#biggidroid {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 500px;
    font-weight: bold;
}

#biggidroid td, #biggidroid th {
    border: 1px solid #ddd;
    padding: 8px;
}

#biggidroid tr:nth-child(even){background-color: #f2f2f2;}

#biggidroid tr:hover {background-color: #ddd;}

#biggidroid th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
	<h2>Simple PHP Registration FORM</h2>
	<form method="post" action="insert.php">
		<p>First Name: <input type="text" name="fname"></p>
		<p>Last Name: <input type="text" name="lname"></p>
		<input type="submit" value="Register">
	</form>
	<br>
	<div style="overflow-x:auto;">
		<table id="biggidroid">
		<tr>
			<th>First Name:</th>
			<th>Last Name:</th>
			<th>Options</th>
		</tr>
	<?php
	include("db.php");
	$query = mysqli_query($con, "SELECT * FROM user;");
	while ($row = mysqli_fetch_array($query)) {
	?>
		<tr>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['lname']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
				<a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>
<p><a style="font-weight: bold;" href="https://www.facebook.com/biggidroid">Follow BiggiDroid on Facebook</a> for any usage issues</p>
</body>
</html>