<!-- http://localhost/php/Aula_%2010-23/aula3.php -->

<?php


$lista = ['uva',24546544, 'mamao',7.5];

echo "tamanho da lista: " . count($lista) . "<br>" ;

for($x = 0; $x < count($lista); $x++){
    echo '<br>';
    echo $lista[$x];
}

$i = 0;
while($i < 100){
    echo '<br>';
    echo $i . "QUARTOU AULA DE PHP";
    $i +=1;
}