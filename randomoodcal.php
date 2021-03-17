<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <table border="2">

            <?php
            $ro = $_GET['ro'];
            $co = $_GET['co'];
            $ran = 0;
            randomTable($ro, $co);
            function randomTable($ro, $co)
            {
                    $even = 0;
                    $odd = 0;
                    for ($i = 0; $i < $ro; $i++) {
                        echo "<tr>";
                        for ($ii = 0; $ii < $co; $ii++) {
                            $ran = rand(0, 99);
                            if ($ran % 2 == 0) {
                                $even++;
                ?>
                                <td style="color: green;"><?php echo $ran; ?> </td>
                            <?php } else {
                                $odd++;
                            ?>
                                <td style="color: red;"><?php echo $ran; ?></td>
                    <?php
                            }
                        }
                        echo "</tr>";
                    } ?>

                    มีเลขคู่
                    <?php echo $even ?> <br>
                    มีเลขคี่
                    <?php echo $odd ?>

                <?php
                }

                ?>

        </table>
        <table>
            <tr>
                <td align="center">
                    <input type="button" onClick="javascript:history.back()" value="BACK" style="color: black;background-color:yellow;border-radius: 5px;padding: 0;">
                </td>
            </tr>
        </table>
    </center>
</body>

</html>

