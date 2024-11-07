<?php

include 'conecta.php';

// ____________________________________________
// verificar se a função está funcional.
$id_recebido = $_GET['id_cli'];
echo "ID RECEBIDO = " . $id_recebido;
// ____________________________________________

$sql = "SELECT * FROM cliente WHERE id=$id_recebido";

$result = mysqli_query($con,$sql);

// ____________________________________________
// var_dump($result);
// retorna 1a linha
// NULL ["num_rows"]=> int(1)
// ____________________________________________

// editando somente 1 pessoa
if($result->num_rows == 1){
    // echo "RETORNOU UMA LINHA";

    // mostrar o que tem na row que é uma array
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);

    // convertendo o retorno do banco em array no PHP
    $row = mysqli_fetch_assoc($result);
    $id_cli = $row['id'];
    $nome = $row['nome'];
    $cpf = $row['cpf'];
    $telefone = $row['telefone'];
    $email = $row['email'];
    $senha = $row['senha'];
    
    echo "<br> DADOS do CLIENTE: ". $nome;
    echo "<br> CPF: ". $cpf;
    echo "<br> TELEFONE: ". $telefone;
    echo "<br> E-MAIL: ". $email;
    echo "<br> SENHA: ". $senha;
    

    // $nome = "Pópopó";
    // $telefone = "552198785189";

    // $sql = "UPDATE cliente SET nome = '$nome', telefone = '$telefone' WHERE id=$id_recebido";
    // $result = mysqli_query($con,$sql);


    // $cpf = "111111111";
    // $senha = "oxe";

    // $sql = "UPDATE cliente SET cpf = '$cpf', senha = '$senha' WHERE id=$id_recebido";
    // $result = mysqli_query($con,$sql);



    // ______________________________________________

    // $update = "UPDATE cliente SET nome = '$nome' , cpf = '$cpf', telefone = '$telefone' , email = '$email' , senha = '$senha WHERE id=$id_recebido";
    // echo $update;

    // $result2 = mysqli_query($con,$update);

    // if($result2){
    //     echo "ATUALIZADO COM SUCESSO!!!!";
    // }
    
    if(isset($_POST['salvar'])){

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $update = "UPDATE cliente SET nome = '$nome' , cpf = '$cpf', telefone = '$telefone' , email = '$email' , senha = '$senha' WHERE id=$id_recebido";
    
        $result2 = mysqli_query($con,$update);

        if($result2){
            echo '<script> alert ("ATUALIZADO COM SUCESSO!!!!") </script> ';
        }       
}
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc_CLIENTE</title>
</head>
<body>
    <h1>EDITAR CLIENTE</h1>

    <!-- ALTERA O ACTION PARA ID -->
    <form id="cadastro_recebe.php" method="post">
        <label for="nome">NOME: </label>
        <input type="text" name="nome" id="nome" value=" <?php echo $nome ?> " >
        <br>

        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf" value=" <?php echo $cpf ?> " >
        <br>

        <label for="telefone">FONE: </label>
        <input type="text" name="telefone" id="telefone" value=" <?php echo $telefone ?> " >
        <br>

        <label for="EMAIL">EMAIL: </label>
        <input type="text" name="email" id="email" value=" <?php echo $email ?> ">
        <br>

        <label for="SENHA">SENHA: </label>
        <input type="password" name="senha" id="senha" value=" <?php echo $senha ?> ">
        <br>

        <input type="submit" id="cad" name="salvar" value="SALVAR">
    </form>

    
</body>
</html>