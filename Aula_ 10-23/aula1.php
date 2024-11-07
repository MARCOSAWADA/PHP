<!-- http://localhost/php/Aula_%2010-23/aula1.php -->

<?php

function soma($x, $y){
    if($x > 0 && $y >0){
        return $x + $y;
    }else{
        return " Manda um número maior que ZeRo, seu Animal !!!!";
    }
}

$num1 = 10;
$num2 = 0;
$res = soma($num1, $num2);
echo $res;
