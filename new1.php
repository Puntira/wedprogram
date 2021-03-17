<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form method="POST" action="new2.php">
            <table>
                <tr>
                    <td>ตัวเลขที่ 1
                        <input type="number" name="num1" max="20" min="1" step="1" value="">
                    </td>
                </tr>
                <tr>
                    <td>ตัวเลขที่ 2
                        <input type="number" name="num2" max="200" min="100" step="5" value="">
                    </td>
                </tr>
                <tr>
                    <td>ตัวเลขที่ 3
                        <input type="number" name="num3" max="1000" min="500" step="100" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit" >
                        <input type="reset" value="Clear">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>