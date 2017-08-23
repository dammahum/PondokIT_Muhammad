<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>
<?php
function penjumlahan ($t1, $t2, $t3){
	echo $t1 + $t2 + $t3;	
}

function pengurangan ($k1, $k2, $k3){
	echo $k1 - $k2 - $k3;
}
function perkalian ($kl1, $kl2, $kl3){
	echo $kl1 * $kl2 * $kl3;
}

function pembagian ($b1, $b2, $b3){
	echo $b1 / $b2 / $b3;
}

penjumlahan (250,2500,25000); echo "<br>";
pengurangan (25000,2500,250); echo "<br>";
perkalian (1,12,0); echo "<br>";
pembagian (30,10,3);

?>
</body>
</html>