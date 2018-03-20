<?php
require_once "functions.php";
if( ! session_id()){
	session_start(); //Dose it recalculate every time back to index?
}

countVisit('pFour');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page Four</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	
	<body>
		
		<div class = "navBar">
		<nav>
			<ul>
				<a href="index.php" ><li>Instruction</li>
				<a href="emailForm.php"><li>Email Visiting Record</li></a>
				<a href="pageThree.php"><li>Page Three</li></a>
				<a href="pageFour.php" class="active"><li>Page Four</li></a>
				<a href="pageFive.php"><li>Page Five</li></a>
			</ul>
		</nav>
		
		</div>
		<h1>This Is Page Four</h1>
	</body>
</html>