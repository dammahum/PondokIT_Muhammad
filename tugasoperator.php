<?php

	$a = 24;
	$b = 56;
	$c = 20;
	$d = 14;
	$e = 35;
	$f = 51;
	
	echo $a - $d + $c * $b % $e / $f;
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	$g = 24;
	$h = 55;
	$h = 5;
	$j =14;
	$j /= 2;
	
	echo $h += $g;
	echo $g -= $h;
	echo $g *= $h; 
	echo $j;
	echo "<br>";
	echo $h;
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	$o = 12;
	$p = "12";
	
	var_dump ($o === $p);
	var_dump ($p == $o);
	var_dump ($p <= $o);
	var_dump ($o !== $p);
	var_dump ($p != $o);
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	$z = 10;
	
	echo ++$z; echo "<br>";
	echo ++$z; echo "<br>"; 
	echo --$z; echo "<br>";
	echo $z++; echo "<br>";
	echo $z--; 
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	$m = 10;
	$n = "10";
	
	if ($m == 10 and $n == 10) {
		echo "Halo Dunia!";
	}
	echo "<br>";
	if ($m == 10 or $n == 10) {
		echo "Halo Juga Dunia!";
	echo "<br>";
	}
	if ($m == 10 xor $n == 2) {
		echo "Apa kabar?";
	}
	echo "<br>";
	if ($m !== 1) {
		echo "Baik - Baik";
	}
	echo "<br>";
	echo "<br>";
	echo "<br>";
	$txt1 ="Halo";
	$txt2 ="Lagi";
	
	echo $txt1 . $txt2;
	echo"<br>";
	echo $txt1 .= $txt2;
	
	
	
	
	

?>