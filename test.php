
<!DOCTYPE html>
<html>
<head>
<title>Submit Form Data into database Using Ajax, PHP and jQuery</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<script src="customjs.js"></script>
</head>
<body>
<div id="form_sec">
<h2>Submit Form Data into database Using Ajax, PHP and jQuery</h2> <!-- Required div Starts Here -->
<div id="form_body">
<h3>Fill Basic Information</h3>
<div>
	<form enctype="multipart/form-data" method="post">
<label>First Name :</label>
<input id="fname" name= "fname" type="text">
<label>Last Name :</label>
<input id="lname" name="lname" type="text">
<label>Email :</label>
<input id="email" name="email" type="text">
<label>Phone No :</label>
<input id="phone" name="phone" type="text">
<label>File :</label>
    <p><input type="file" name="file" class="file">
<input id="submit" name="submit" type="button" value="Submit">
</div>
</div>
</div>
<?php
$connection = mysqli_connect("localhost", "root", "", "db_form"); // create datbase connection
//$db = mysqli_select_db("db_form", $connection); // Selecting Database
//Fetching Values from URL

?>

</body>
</html>