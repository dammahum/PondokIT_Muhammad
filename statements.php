<?php
	$nilai = 80;
	if ($nilai >= 0 && $nilai <= 29) {
		echo "Anda Mendapatkan E";
	}
	elseif ($nilai >= 30 && $nilai <= 59) {
		echo "Anda Mendapatkan D";
	}
	elseif ($nilai >= 60 && $nilai <= 69) {
		echo "Anda Mendapatkan C";
	}
	elseif ($nilai >= 70 && $nilai <= 79) {
		echo "Anda Mendapatkan B";
	}
	elseif ($nilai >= 80 && $nilai <= 100) {
		echo "Anda Mendapatkan A";
	}
	else  {
		echo "Anda Mendapatkan E";
	}
	

?>