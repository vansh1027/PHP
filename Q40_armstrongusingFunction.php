<?php
function armstrongCheck($number){
	$sum = 0; 
	$x = $number; 
	while($x != 0) 
	{ 
		$rem = $x % 10; 
		$sum = $sum + $rem*$rem*$rem; 
		$x = $x / 10; 
	} 
	if ($number == $sum)
		return 1;
	
	return 0; 
}

$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
	echo "Yes";
else {
	echo "No""<br>";
	echo "This code is executed by vansh thakur!";
}
?>
