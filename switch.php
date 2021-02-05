<!DOCTYPE html>
<html>
<head>
	<title>Switch statement</title>
</head>
<body>
<form action = "switch.php" method = "post">
	What was your grade?
	<input type="text" name="grade"><br>
<input type="Submit">
</form>

<?php
$grade = $_POST["grade"];
switch($grade){
	case "A":
	echo "You did amazing";
	break;
	case "B":
	echo "You did pretty good";
	break;
	case "C":
	echo "You did poorly";
	break;case "D":
	echo "You did very bad";
	break;
	case "F":
	echo "You Fail!";
	break;
default:
echo "Invalid Grade";
}
?>
</body>
</html>