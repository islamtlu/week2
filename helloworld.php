<?php

	// Variable starts with $,
	// string has to use quotation marks
	// line has to end with semicolon
	$first_name = "Islam";
	$last_name = "Muhammad";
	
	// show code to browser
	// for adding up numbers, use + sign
	// for adding up strings, use .
	echo $first_name." ".$last_name;
	
	// > greater than
	// < smaller than
	// >= greater than or equal
	// <= smaller than or equal
	// == equal
	// != not equal
	
	$age = 4;
	
	// if age is smaller than or equal to 6, then you can sleep at lunchtime
	if($age <= 6) {
		//it is true
		echo " yes, you can sleep at lunchtime";
		
	}else{
		//if it false
		echo " no, you are at school";
		
	}

?>

<br>

<?php

	//loop
	
	for ($i=1; $i <= $age; $i=$i+1) {
		
		echo $i;
		
	}

?>

<br>

<?php

	echo "Today is ".date("l m.d.y h:i:s");

?>

<br>

<?php

	echo "Today is ".date("d.m.Y H:i");

?>