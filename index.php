<?php
/*
1. 5 PHP pages with links to all the other pages.
	on one of the page, a form that prompts for an email address with a submit button that will send the number of times the pages have been visited to the entered email address.
2. Each time a page is visited, add 1 to a counter.
3. display the number of times the page has been visited and list the number of times the other pages have been visited.
*/

require_once "functions.php";
if( ! session_id()){
	session_start(); //Dose it recalculate every time back to index?
}

countVisit('intro');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Instruction</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	
	<body>
		<div class = "navBar">
		<nav>
			<ul>
				<a href="index.php" class="active"><li>Instruction</li>
				<a href="emailForm.php"><li>Email Visiting Record</li></a>
				<a href="pageThree.php"><li>Page Three</li></a>
				<a href="pageFour.php"><li>Page Four</li></a>
				<a href="pageFive.php"><li>Page Five</li></a>
			</ul>
		</nav>
		
		</div>
		<div class="visitCount">
			<ul>
				<li><?php echo $countArray['intro']; ?></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</body>
</html>
