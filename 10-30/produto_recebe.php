<!-- http://localhost/php/10-30/produto_recebe.php -->
<!-- NÃO USAR O LINK ACIMA, POIS ELE É A RESPOSTA DO PRODUTO.HTML -->

<?php
include 'conecta.php';

if(isset($_POST)){

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];


    $sql = "INSERT INTO produto (nome, descricao, preco, quantidade) VALUES ('$nome', '$descricao', '$preco', '$quantidade')";
    
    $res = mysqli_query($con, $sql);

    if($res){
        // echo "<br><h1><mark><ins> 'PRODUTO' </mark></ins> CADASTRADO COM SUCESSO</h1>";
        $x = 0;
                while ($x < 100) {
                    echo "<br><h1><mark><ins> 'PRODUTO' </mark></ins> CADASTRADO COM SUCESSO</h1>";
                    $x++;
                }
    }else{
        echo "ERRRRRRRRRRROOOOOOOO";
    }
}