<?php
	/*
	if(!array_key_exists('index', $_SESSION)){
		$_SESSION['index']=0;
	}
	elseif(!array_key_exists('emailForm', $_SESSION)){
		$_SESSION['emailForm']=0;
	}
	elseif(!array_key_exists('pThree', $_SESSION)){
		$_SESSION['pThree']=0;
	}
	elseif(!array_key_exists('pFour', $_SESSION)){
		$_SESSION['pFour']=0;
	}
	elseif(!array_key_exists('pFive', $_SESSION)){
		$_SESSION['pFive']=0;
	}
	*/
	$introT=$_POST['introT'];
	$emailFormT=$_POST['emailFormT'];
	$pThreeT=$_POST['pThreeT'];
	$pFourT=$_POST['pFourT'];
	$pFiveT=$_POST['pFiveT'];
	$firstName = $_POST['firstName'];
	$toEmail = $_POST['email'];
	$fromEmail = 'PHP@localhost';
	$subject = 'Webpage visiting Record';
	$body = 'Hello! '. $firstName. ', Here is your visiting record: Introduction '. $introT.' times / Email Visiting Record: '.$emailFormT. ' times / Page Three: '.$pThreeT. ' times / Page Four: '. $pFourT. ' times / Page Five: '. $pFiveT. ' times.';
	$header = 'From: PHP@localhost';
	
	if(mail($toEmail, $subject, $body, $header)){
		echo '<h1 style="color:#E43F6F; margin: auto; margin-top: 10%; width: 50%;">Record is sent!</h1>';
	}
?>

