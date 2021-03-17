<?php
        function add (&$num1)
        {
            
            $num1= $num1+100;
            echo "Result in function: ".$num1" <br><br>";

        }

        $n1=5;
    
        add($n1);
        echo "main program:"$n1";


?>
