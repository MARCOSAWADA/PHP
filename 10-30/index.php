<!-- http://localhost/php/10-30/index.php -->


<!-- veio do cadastro_recebe.php -->
<?php
include 'conecta.php';

// criando somente um arquivo de cadastro,
// antes existia 2 arquivos (cadastro.html e cadastro_recebe.php).


if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cliente (nome, cpf, telefone, email, senha) VALUES ('$nome', '$cpf', '$telefone', '$email', '$senha')";
    
    $res = mysqli_query($con, $sql);

    // if($res){
    //     echo "<script> alert('cadastrado com sucesso!') </script>";
    //     header('location: z_mostrar_lista.php');
    // }else{
    //     echo "ERRRRRRRRRO";
    // }

    if($res) {
        echo "<script>
                alert('cadastrado com sucesso!');
                setTimeout(function() {
                    window.location.href = 'z_mostrar_lista.php';
                }, 0000);
                </script>";
            }else{
                echo "ERRRRRRRRRO";
            }
}


// DA PARA USAR META HTTP
// VAI MADNAR UM SCRIPT E IRÁ REDIRECIONAR 3 SEGUNDOS
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc_CLIENTE</title>
</head>
<body>
    <h1>cadastro</h1>

    <form id="formulario" method="post">
        <label for="nome">NOME: </label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome">
        <br>

        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf" placeholder="Digite o CPF">
        <br>

        <label for="telefone">FONE: </label>
        <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone">
        <br>

        <label for="EMAIL">EMAIL: </label>
        <input type="text" name="email" id="email" placeholder="Digite o e-mail">
        <br>

        <label for="SENHA">SENHA: </label>
        <input type="password" name="senha" id="senha" placeholder="Digite a senha">
        <br>

        <input type="submit" id="cad" name="cadastrar" value="CADASTRAR">
    </form>
</body>
</html>