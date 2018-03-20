<?php 
	$intro = 0;
	$emailVisit=0;
	$pThree=0;
	$pFour=0;
	$pFive=0;
	
	$countArray=array('intro' => $intro, 
					  'emailVisit' => $emailVisit, 
					  'pThree' => $pThree, 
					  'pFour' => $pFour, 
					  'pFive' => $pFive);
/*					 
	function totalVisit(){
		global $countArray;
		$totalVisit=0;
		foreach($countArray as $key => $value){
			$totalVisit += $value;
		}
		echo  $totalVisit;
		return $totalVisit;
	}
*/

	
	function countVisit($page){
		global $intro;
		global $emailVisit;
		global $pThree;
		global $pFour;
		global $pFive;
		global $countArray;
					 
			switch($page){
			case 'intro':
				$intro ++;
				echo $countArray['intro'];
				break;
				
			case 'emailVisit':
				$countArray['emailVisit'] += 1;
				break;
				
			case 'pThree':
				$countArray['pThree'] += 1;
				break;
				
			case 'pFour':
				$countArray['pFour'] += 1;
				break;
				
			case 'pFive':
				$countArray['pFive'] += 1;
				break;
			
			}
			return $countArray;
	}
?>