<?php


	
session_start(); 
if( !isset($_SESSION['pThree'])){
	$_SESSION['pThree']=0;
	
}
$_SESSION['pThree'] += 1;

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