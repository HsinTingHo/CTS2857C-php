<?php
include_once "functions.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	
	<body>
		
		<div class = "navBar">
		<nav>
			<ul>
				<a href="index.php" ><li>Instruction</li>
				<a href="emailForm.php" class="active"><li>Email Visiting Record</li></a>
				<a href="pageThree.php"><li>Page Three</li></a>
				<a href="pageFour.php"><li>Page Four</li></a>
				<a href="pageFive.php"><li>Page Five</li></a>
			</ul>
		</nav>
		
		</div>
		<form class="emailform">
			<lable>First Name</lable><br />
			<input type="text" name="firstName"/><br /><br />
			<lable>Email</lable><br />
			<input type="text" name="email"/><br /><br />
		</form>
	</body>
</html>