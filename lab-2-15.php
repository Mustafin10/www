<title> Mustafin Daniil Pi-322</title>
<?php 
	$mass = array();
	$povtorMain=0;
	$numberPovtor;
	echo "variant 8 </br>";

	for ($i=0; $i < rand(10,100) ; $i++) { 
		$mass[] = rand(10,20);
	}

	for ($i=0; $i < count($mass) ; $i++) { 
		$povtor = 0;
		for ($k=0; $k < count($mass) ; $k++) { 
			if ($mass[$i] == $mass[$k]) {
				$povtor +=1;
				if ($povtor > $povtorMain) {
					$povtorMain = $povtor;
					$numberPovtor = $mass[$i];
				};
			}
		}
	}
	echo "Array of numbers </br>";
	foreach ($mass as  $value) {
			echo "$value ";
		}
	echo "</br> Number of repeating numbers $numberPovtor =  $povtorMain </br>";

	echo "variant 13 </br>";
	$arr = array();
	$sum = 0;

	for ($i=0; $i < rand(10,100) ; $i++) { 
		$arr[] = rand(-50,50);
	}

	for ($i=0; $i < count($arr) ; $i++) { 
		if ($arr[$i] > 0 and $arr[$i] % 2 == 1 ) {
			$sum += $arr[$i];
		}
	}
	echo "Array of numbers </br>";
	foreach ($arr as  $value) {
			echo "$value ";
		}

	echo "</br>Sum of non-negative and odd numbers = $sum </br>";
	 ?>