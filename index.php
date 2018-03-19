<?php
/*
1. 5 PHP pages with links to all the other pages.
	on one of the page, a form that prompts for an email address with a submit button that will send the number of times the pages have been visited to the entered email address.
2. Each time a page is visited, add 1 to a counter.
3. display the number of times the page has been visited and list the number of times the other pages have been visited.
*/
session_start();
include_once "functions.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Instruction</title>
	</head>
	
	<body>
		<nav>
			<ul>
				<li>Instruction</li>
				<a href="emailForm.php"><li>Email Visiting Record</li></a>
				<a href="pageThree.php"><li>Page Three</li></a>
				<a href="pageFour.php"<li>Page Four</li></a>
				<a href="pageFive.php"<li>Page Five</li></a>
			</ul>
		</nav>
	</body>
</html>
