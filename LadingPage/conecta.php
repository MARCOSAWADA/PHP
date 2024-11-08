<!-- http://localhost/php/10-30/conecta.php -->

<!-- PARA CONECTAR COM O BANCO DE DADOS -->

<?php

$database = "cadastro";
$local = "localhost";
$user = "root";
$password = "";


$con = new mysqli($local,$user,$password,$database);


if($con->connect_error){
    die("FaLhA nA cOnExÃo " . mysqli_error($con));
}
else{
    echo "<br> <h1> <mark><ins> CONECTADO COM SUCESSO <br><br>AO BANCO DE DADOS!!!! </h1> </mark></ins>";
    echo "<script> alert('CONECTADO COM SUCESSO!!!!')</script> ";


}