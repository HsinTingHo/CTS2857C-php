<?php
require_once "functions.php";
if( ! session_id()){
	session_start(); //Dose it recalculate every time back to index?
}

countVisit('pThree');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page Three</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	
	<body>
		
		<div class = "navBar">
		<nav>
			<ul>
				<a href="index.php" ><li>Instruction</li>
				<a href="emailForm.php"><li>Email Visiting Record</li></a>
				<a href="pageThree.php" class="active"><li>Page Three</li></a>
				<a href="pageFour.php"><li>Page Four</li></a>
				<a href="pageFive.php"><li>Page Five</li></a>
			</ul>
		</nav>
		
		</div>
		<h1>This Is Page Three</h1>
	</body>
</html>