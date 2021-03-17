
<html lang="en">
<head>
<meta charset="UTF-8">
<title> one page</title>
</head>
<body>
<?php
#โชว์หน้าเดียว
	if(isset( $_GET['btnSubmit']))
	{
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$n3 = $_GET['n3'];
	$n4 = $_GET['n4'];
	$n5 = $_GET['n5'];
	echo "รหัสนักศึกษา : $n1 <br>";
	echo "ชื่อ-นามสกุล : $n2 <br>";
	echo "เพศ : $n3 <br>";
	echo "หลักสูตร : $n4 <br>";
	echo "เกรดเฉลี่ย : $n5 <br>";
	echo "<a href = 'me1.php'>back</a>";
	}else{
		echo '<form method="get" action="p1.php">
	<table border="1" align="center" width="400">
		<tr>
			<td colspan="2" align="center">
			<strong> กรอกข้อมูล</strong>
			</td>
		<tr>
		<tr>
			<td align="right">รหัสนักศึกษา : </td>
			<td><input type="value" name="n1" size="15" value=""> </td>
	</tr>
		<td align="right">ชื่อ-นามสกุล : </td>
		<td><input type="value" name="n2" size="15" value=""></td>
	</tr>

	<tr>
		<td align="right">เพศ : </td>
		<td><input type="radio" name="n3" size="15" value="ชาย"> ชาย<br>
		<input type="radio" name="n3" size="15" value="หญิง"> หญิง<br>
	</tr>
	<tr>
		<td align="right">หลักสูตร : </td>
		<td><input type="radio" name="n4" size="15" value="it">it
		<input type="radio" name="n4" size="15" value="iti">iti</td>
	</tr>
		</tr>
		<td align="right">เกรดเฉลี่ย : </td>
		<td><input type="value" name="n5" size="15" value=""></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input name = "btnSubmit" type="submit" value=" OK " >
		<input type="reset" value=" Clear " >
		</td>
	</tr>
</table>
</form>';
	}
?>
</body>
</html>