<?php
 
 $number=50;
 
 
 
	if ($number >= 0 && $number <= 29) {
		echo "Anda Mendapatkan E";
	}
	elseif ($number >= 30 && $number <= 59) {
		echo "Anda Mendapatkan D";
	}
	elseif ($number >= 60 && $number <= 69) {
		echo "Anda Mendapatkan C";
	}
	elseif ($number >= 70 && $number <= 79) {
		echo "Anda Mendapatkan B";
	}
	elseif ($number >= 80 && $number <= 100) {
		echo "Anda Mendapatkan A";
	}
	else  {
		echo "Anda Mendapatkan E";
	}
	
	?>