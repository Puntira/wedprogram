<?php
if($_GET["Action"]=="from1")
{
	echo $_POST["txtSubject"];
}
?>


<html>
<head>
<title>ThaiCreate.Com PHP Sending Email</title>
</head>
<body>
<form action="<?=$_SERVER["PHP_SELF"];?>?Action=Save" method="post" name="frmMain">
<table width="343" border="1">
<tr>
<td>To</td>
<td><input name="txtTo" type="text" id="txtTo"></td> 
</tr> 
<tr>
<td>Subject</td>
<td><input name="txtSubject" type="text" id="txtSubject"></td>
</tr>
<tr>
<td>Description</td>
<td><textarea name="txtDescription" cols="30" rows="4" id="txtDescription"></textarea></td>
</tr>
<tr>
<td>Form Name</td>
<td><input name="txtFormName" type="text"></td>
</tr>
<tr>
<tr>
<td>Form Email</td>
<td><input name="txtFormEmail" type="text"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Send"></td>
</tr>
</table>
<br>
<br>
<br>
</form>
</body>
</html>