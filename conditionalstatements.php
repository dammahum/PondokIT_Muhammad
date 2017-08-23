<html>
<head>
	<title> Learn Conditional Statements </title>
</head>
<body>
	<?php
	$favcolor = "red";
	
	switch ($favcolor) {
		
	case "red" :
		echo "My Favorite Food is Meatballs";
		break;
	case "green" :
		echo "My favorite food is fried rice";
		break;
	case "blue" :
		echo "My favorite color is gudeg";
		break;
	default :
		echo "My favorite's color is neither meatballs, fried rice, gudeg";
	
	}
	
	echo "<br>";
	echo "<br>";
	
	$nama_hari = date('l');
	
	switch ($nama_hari) {
		
		case "Sunday":
			echo "Ahad!";
			break;
		case "Friday":
			echo "Jum'at!";
			break;
		case "Tuesday":
			echo "Selasa!";
			break;
		default:
			echo "Unknown Day";
		
		}
?>
</body>
</html>