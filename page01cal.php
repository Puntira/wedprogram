<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <?php
    
        $id = $_POST['รฟัสนักศึกษา'];
        $name = $_POST['name'];
        $type1 = $_POST['type1'];
        $type2 = $_POST['type2'];
        $grade = $_POST['grade'];
        echo "ID : $id  <br>";
        echo "Name : $name <br>";
        echo "Gender : $type1 <br>";
        echo "Branch : $type2 <br>";
        echo "Grade : $grade <br>";

    ?>
     <a href='page01.php'>Back</a>
     </center>
</body>
</html>