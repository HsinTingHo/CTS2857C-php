<?php
/*
1. 5 PHP pages with links to all the other pages.
	on one of the page, a form that prompts for an email address with a submit button that will send the number of times the pages have been visited to the entered email address.
2. Each time a page is visited, add 1 to a counter.
3. display the number of times the page has been visited and list the number of times the other pages have been visited.
*/
session_start(); 
if( !isset($_SESSION['index'])){
	$_SESSION['index']=0;
	
}
$_SESSION['index'] += 1;


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
		<h2>Please visit every page at least once.</h2>
		<!-- visit record table -->
		<div class = "contentT">
			<table>
				<tr>
					<th>Introduction</th>
					<th>Email Visiting Record</th>
					<th>Page Three</th>
					<th>Page Four</th>
					<th>Page Five</th>
				</tr>
				<tr>
					<th><?php echo $_SESSION['index']; ?></th>
					<th><?php if(isset($_SESSION['emailForm'])){ echo $_SESSION['emailForm']; }?></th>
					<th><?php if(isset($_SESSION['pThree'])){ echo $_SESSION['pThree'];} ?></th>
					<th><?php if(isset($_SESSION['pFour'])){ echo $_SESSION['pFour'];} ?></th>
					<th><?php if(isset($_SESSION['pFive'])){ echo $_SESSION['pFive'];} ?></th>
				</tr>
			</table>
		</div>
		
	</body>
</html>
