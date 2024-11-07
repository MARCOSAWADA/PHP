<!-- http://localhost/php/Aula_%2010-23/aula2.php -->

<?php

// $lista = ['maça', 'banana','mamao'];

// var_dump($lista);
// echo $lista[1];

// $lista2 = array(10,20,30,40);

// echo '<br>';
// echo $lista2[2];

// ______________________________________________

$lista = ['perfeição .',2,'mamao',3.14];

var_dump($lista);
echo $lista[1];

$lista2 = array(10,20,30,40);

// var_dump($lista2);
// echo '<br>';
// echo $lista2[2];


$lista = ['perfeição',2,'mamao',3.14];

for($x = 0; $x < count($lista); $x++){
    echo '<br>';
    echo $lista[$x];
}