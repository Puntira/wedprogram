<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>
<center>
<p>
    <img src="Pic/header.jpg" >
     <form action="CalculateCar.php" method="post">
     <fieldset style="width:50%;">
    <legend style="margin:0 auto;">Car Model</legend>
                    เลือกรุ่นรถยนต์ 
                    <select name="car"> 
                        <option value="Accord">Accord</option>   
                        <option value="Civic">Civic</option> 
                        <option value="Jazz">Jazz</option> 
                        <option value="City">City</option>            
                    </select>
                    <input type="submit" name="submit" value="Submit"><br>
                    <table border="1">
                        <tr>
                            <td> ภาพรถยนต์ </td>
                            <td> รุ่นรถยนต์</td>
                            <td> ราคารถยนต์</td>
                            <td> อัตราดอกเบี้ย ต่อปี (ร้อยละ,%)</td>
                        </tr>
                        <tr>
                            <td><img src="Pic/Accord.png" style="width:80px;height:80px;"> </td>
                            <td> Accord</td>
                            <td> 1,799,000</td>
                            <td> 2.00</td>
                        </tr>
                        <tr>
                            <td><img src="Pic/Civic.png" style="width:100px;height:88px;"> </td>
                            <td> Civic</td>
                            <td> 1,145,000</td>
                            <td> 2.00</td>
                        </tr>   
                        <tr>
                            <td><img src="Pic/Jazz.png" style="width:80px;height:60px;"> </td>
                            <td> Jazz</td>
                            <td> 754,000</td>
                            <td> 4.00</td>
                        </tr>
                        <tr>
                            <td><img src="Pic/City.png" style="width:120px;height:80px;"> </td>
                            <td> City</td>
                            <td> 749,000</td>
                            <td> 4.00</td>
                        </tr>
                     
                        
                    </table>

    </fieldset>
     </form>
</center>
</p>  
</body>
</html>