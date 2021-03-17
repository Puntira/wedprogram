<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<header>
 </header>
 <?php
        session_start();
        $money = 0;
        $InterestRate=0;
        if(isset($_POST["submit"])){
            $_SESSION["car"] = $_POST["car"];
        }
        $text = $_SESSION["car"];
         echo '<section id="img">';
         echo "<img src='Pic/$text.png' width='450px'>";
         echo "<img src='Pic/logo-".strtolower($text).".png' width='150px'> ";
         echo '</section>';
       
        if( $text == "Accord"){
            $money = 1799000;
            $InterestRate = 2;
        }else if( $text == "Civic"){
            $money = 1145000;
            $InterestRate = 2;
        }else if( $text == "Jazz"){
            $money = 754000;
            $InterestRate = 4;
        }else if( $text == "City"){
            $money = 749000;
            $InterestRate = 4;
        }
        @$DownPayment = $_POST["DownPayment"];
        $DownPayment1 = 0;
        if($DownPayment == "15"){
            $DownPayment1 = 0.15;   
        }else if($DownPayment == "20"){
            $DownPayment1 = 0.20;
        }else if($DownPayment == "25"){
            $DownPayment1 = 0.25;
        }else if($DownPayment == "30"){
            $DownPayment1 = 0.30;
        }
?>
    <section id="table">
        <form action="CalculateCar.php" method="post">
            <fieldset style="width:550px; height: 80px;">
            <legend style="font-size: 25px;">เลือกเงินดาวน์</legend>
            <font size = '5'> เงินดาวน์</font> <input type="radio" name="sname" onclick="chackradio()">
                            <select name="DownPayment" id="check"> 
                                <option value="15">15%</option>   
                                <option value="20">20%</option> 
                                <option value="25">25%</option> 
                                <option value="30">30%</option>            
                            </select>
            <font size = '5'>หรือใส่จำนวนเงิน</font><input type="radio" name="sname1"  onclick="chackradio1()"> <input type="number" name="money1" id="check1">
            </fieldset>
            <fieldset style="width:550px;  height: 80px;">
            <legend style="font-size: 25px;">เลือกระยะเวลาการผ่อนชำระ</legend>
            <font size = '5'> ระยะเวลา</font> 
            <select name="TermMonths" > 
                                <option value="36">36</option>   
                                <option value="48">48</option> 
                                <option value="60">60</option> 
                                <option value="72">72</option>    
                                <option value="84">84</option>         
            </select>
            <font size = '5'> งวด</font> 
            </fieldset>
            <input type="submit" name="Calculate" value="Calculate" style="width:150px; height: 40px; margin-top:20px; 
            margin-bottom: 20px; margin-left: 200px; font-size: 15px;" >
        </form>
        <?php
            if(isset($_POST["Calculate"])){
                $months = $_POST["TermMonths"];
                $down = 0;
                $moneybuy = 0;
                $nterestYear1 = 0;
                $total = 0;
                echo'<table border="1" width="550px"  height="80px" style="font-size: 25px;">'; 
                echo'<tr><td colspan ="2">รายงานการคำนวณสินเชื่อผ่อนชำระ</td></tr>';
                echo'<tr>';
                echo'<td>รุ่นรถยนต์</td>';
                echo'<td>'.$text.'</td>';
                echo'</tr>';
                echo'<tr>';
                echo'<td>ราคารถยนต์</td>';
                echo'<td>'.number_format($money).' (บาท)</td>';
                echo'</tr>';
                echo "<tr>";
                echo "<td>";
                echo "(1)เงินดาวน์ :";
                echo "</td>";
                echo "<td>";
                if(isset($_POST["DownPayment"])){
                   @$down = DownPayment($money,$DownPayment1);
                    echo number_format(DownPayment($money,$DownPayment1))."(".$DownPayment1*100 ."%)";
                }else{
                    @$down = $_POST["money1"];
                    echo number_format($_POST["money1"])."(".round(($_POST["money1"]/$money)*100) ."%)";
                }
                echo "</td>";
                echo "</tr>";
                echo'<tr>';
                echo'<td>(2)จำนวนเงินที่ต้องขอสินเชื่อ : </td>';
                echo'<td>'.number_format(installment($money,$down)).' (บาท)</td>';
                $moneybuy = installment($money,$down);
                echo'</tr>';
                echo'<tr>';
                echo'<td>(3)ดอกเบี้ย ต่อปี : </td>';
                echo'<td>'.number_format(interestYear( $moneybuy,$InterestRate)).' (บาท)</td>';
                $nterestYear1 = interestYear( $moneybuy,$InterestRate);
                echo'</tr>';
                echo'<tr>';
                echo'<td>(4)ดอกเบี้ยทั้งหมด '.$months/12 .' (ปี) '. $months .' งวด : </td>';
                echo'<td>'.number_format(total( $nterestYear1 ,$months)).' (บาท)</td>';
                $total = total( $nterestYear1 ,$months);
                echo'</tr>';
                echo'<tr>';
                echo'<td>(5)จำนวนเงินที่ต้องผ่อนต่อ 1 งวด</td>';
                echo'<td>'.number_format(round(payMonth( $moneybuy , $total,$months))).' (บาท)</td>';
                echo'</tr>';
                echo'<tr><td colspan ="2"><center><a href="index.php"><input type="submit" value="กลับไปหน้าแรก"  style="width:150px; height: 40px;font-size: 15px;"></a></center></td></tr>';
                echo'</table>';
            }
            function DownPayment($money,$DownPayment1){
                return $money*$DownPayment1;
            }
            function installment($money,&$down){
                return  $money-$down;
            }
            function interestYear( &$moneybuy,$InterestRate){
                return($moneybuy * ($InterestRate / 100));

            }
            Function total( &$nterestYear1 ,$months){
                return $nterestYear1 * ($months/12);
            }
            function payMonth( $moneybuy , &$total,$months){
                return ($moneybuy+$total)/$months;
            } 
        ?>
    
    </section>
    
</div>
   

<script>
    function chackradio(){
            document.getElementById("check").disabled = false;
            document.getElementById("check1").disabled = true;
    }
    function chackradio1(){
            document.getElementById("check1").disabled = false;
            document.getElementById("check").disabled = true;

    }
</script>
</body>
</html>