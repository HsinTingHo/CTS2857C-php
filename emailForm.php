<?php
session_start(); 
if( !isset($_SESSION['emailForm'])){
	$_SESSION['emailForm']=0;
}
$_SESSION['emailForm'] ++;
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
		
		<form class="emailform" action="emailSender.php" method="post">
			<lable>First Name</lable><br />
			<input type="text" name="firstName"/><br /><br />
			<lable>Email</lable><br />
			<input type="text" name="email"/><br /><br />
			<input type="hidden" name="introT" value="<?php echo $_SESSION['index'];?>">
			<input type="hidden" name="emailFormT" value="<?php echo $_SESSION['emailForm'];?>">
			<input type="hidden" name="pThreeT" value="<?php echo $_SESSION['pThree'];?>">
			<input type="hidden" name="pFourT" value="<?php echo $_SESSION['pFour'];?>">
			<input type="hidden" name="pFiveT" value="<?php echo $_SESSION['pFive'];?>">
			<input type="submit" class="btn" value="Send My Visit Record">
			
		</form>
	</body>
</html>