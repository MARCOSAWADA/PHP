<?php

if( isset($_GET['logar'])){

$login = $_GET['login'];
$senha = $_GET['senha'];

echo $login;
echo "<br>";
echo $senha;
}else{
    header('location: index.html');
}