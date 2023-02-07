<?php 
	for($i=0;$i<=5;$i++){
		$array[$i] ='num';
		echo $array[$i];
	};

	for($j=5;$j<=1;$j--){
		$array[$j] = $array2;
		$array[0] = $array2[5];
		
		for($l=0;$l<=5;$l++){
			if($array[$l]==$array2[$l]){
			echo $array[$l], "el numero es capricua";
			};
		};
	};
?>-