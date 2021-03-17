<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page1</title>
    </head>
    <body>
        <h2>Result</h2>
        <?php
            if(isset($_GET['btnsubmit']))
            {
                $fname = $_GET['fname'];
                $lname = $_GET['lname'];
                echo"First name:  $fname ";
                echo "<br><br>";
                echo"Last name:  $lname ";
                echo "<br><br>";
            }
            else
            {

        ?>
            <form method="get" action="page1.php">
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname"><br><br>
                <input name ="btnsubmit" type="submit" value="Ok">
                <input name="btnreset" type="reset" value="Clear">
            </form>
        <?php 
            }
        ?>
    </body>
</html>