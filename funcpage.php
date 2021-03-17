<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Sonochi no sadame </title>
</head>
<body>
<?php
	function test($x1,$x2,$x3,$x4,$x5){
		echo "รหัสนักศึกษา : $x1 <br>";
		echo "ชื่อ-นามสกุล : $x2 <br>";
		echo "เพศ : $x3 <br>";
		echo "หลักสูตร : $x4 <br>";
		echo "เกรดเฉลี่ย : $x5 <br>";
		echo "<a href = 'p1.php'>back</a>";
	}
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$n3 = $_GET['n3'];
	$n4 = $_GET['n4'];
	$n5 = $_GET['n5'];
	test($n1,$n2,$n3,$n4,$n5);
?>

</body>
</html>