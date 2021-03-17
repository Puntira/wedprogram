<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> นักศึกษา </title>
</head>
<body>
<form method="GET" action="p2.php">
    <table border="1" align="center" width="400">
        <tr>
            <td colspan="2" align="center">
                <strong> นักศึกษา</strong>
            </td>
        </tr>
        <tr>
            <td align="right">รหัสนักศึกษา : </td>
            <td><input type="value" name="n1" size="15" value=""> </td>
        </tr>
        <tr>
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
            <td>
                <select name="n4" id="">
                    <option value="iti">iti</option>
                    <option value="it">it</option>
                </select>
            </td>
        </tr>
        <tr>
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
</form>
</body>
</html>