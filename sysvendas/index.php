<!-- http://localhost/PHP/sysvendas/ -->

<?php

// Comentários

$nome = "Jão jão";

$num = 100;

// $bool = false;
$teste = true;

// $nome = 150;

// Echo equivalente ao print do Python

echo $nome;
echo "<br>";
echo $teste;

$real = 1000;
$dolar = 5.676;

$conversao = $real / $dolar;

// mostrando o texto atraves do print
echo "<br>";
print(number_format($conversao,2));

echo "<br>";
echo "US$: " . $conversao;

// ________________________________________________

$real = 5000;
$dolar = 5.676;

$conversao = $real / $dolar;

echo "<br>";
echo "<br>";
echo "<br>";

if($conversao < 750){
    echo "Tá pobre !!!! Voce tem apenas " . $conversao . " dólares" ;
}
else{
    echo "ta fofo!!! <br> você tem U$" . $conversao . "dólares" ;
}

$horas = 80;
$valor_hora = 60;

$salario = $horas * $valor_hora;


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br> <h1> Seu salário é de: R$ </h1> " .$salario;

// _________________________________________________

$caminho = './asserts/logo.jpg';

echo ' <img src="./asserts/logo.jpg"> ';

echo '<img src="' . $caminho . ' "> ';

// _________________________________________________

echo "<br>";
echo "<br>";
echo "<br>";

$i = 0;
while($i < 11){
    echo "<br>";
    echo $i;
    $i += 1;
}

// _________________________________________________

for($x = 0; $x < 100; $x++){
    echo "<br>";
    echo "<h3>" . $x . "Que lindo !!! I love PHP </h3> ";
}


?>