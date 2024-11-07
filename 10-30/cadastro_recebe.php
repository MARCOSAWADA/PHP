<!-- http://localhost/php/10-30/cadastro_recebe.php -->
<!-- NÃO USAR O LINK ACIMA, POIS ELE É A RESPOSTA DO CADASTRO.HTML -->

<?php
include 'conecta.php';

if(isset($_POST)){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cliente (nome, cpf, telefone, email, senha) VALUES ('$nome', '$cpf', '$telefone', '$email', '$senha')";
    
    $res = mysqli_query($con, $sql);

    if($res){
        // echo "<br><h1> <mark><ins> 'CLIENTE'</mark></ins> CADASTRADO COM SUCESSO </h1>";
        $x = 0;
                while ($x < 100) {
                    echo "<br><h1> <mark><ins> 'CLIENTE'</mark></ins> CADASTRADO COM SUCESSO </h1>";
                    $x++;
                }
    }else{
        echo "ERRRRRRRRRRROOOOOOOO";
    }
}