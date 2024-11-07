<!-- http://localhost/php/Aula_%2010-23/Nova%20Pasta/index.html -->

<?php

// echo " chegou o disco voador";

// echo "Arquivo";

// var_dump($_POST);

if(isset($_POST)){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];


    if(empty($nome) && empty($idade) && empty($cpf)) {
        echo '<br>';
        echo "<br> não preencheram nada no cadastro";
    }else{
        echo '<br>';
        echo "Digitaram algo no formulário";
    }

   
    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo "bem vindo " . $nome . " voce tem " . $idade ." anos";
    echo '<br>';
    echo '<br>';
    echo '<br>';
    
    
// ______________________________________

    if($idade >= 18){
        echo '<br>';
        echo "welcome recruta: " .$nome . "!!! Você já está pronto para servir, bem vindo recruta!!!";
    }else{
        echo "volte ano que vem!!!!!";
        echo '<br>';
    }


    if(empty($cpf)) {
        echo '<br>';
        echo "<br> CPF não inserido! Volte e insere o CPF!";
    } else {
        echo '<br>';
        echo "CPF digitado successfully !!! ";
    }







    // _______________________________________________


    // if($idade >= 18){
    
    //     echo " <br> welcome " .$nome . "!!! <br> Você já está pronto para acessar o X.......!!!";
    // }else{
    //     echo " <br> sua mãe sabe que você acessa isso???????";
    //     echo '<br>';
    // }


    //     echo '<br>';

    // if( !empty($_POST['cpf'])) {
    //     $cpf = $_POST['cpf'];
    //     echo '<br> CPF: ' . $cpf;
    //     echo "<br> CPF digitado successfully !!! ";
    // }
    //     else{
    //         echo "<br> <br> CPF não inserido!!!!";
    //         echo "<br> <br> PREENCHE OS DADOS DO SEU CARTÃO !!!";
    // }



// ______________________________________

    // if (empty($cpf)) {
    //     echo '<br>';
    //     echo "CPF não inserido.";
    // } else {
    //     echo '<br>';
    //     echo "CPF digitado successfully !!! ";
    // }


        // if( !empty($_POST['cpf'])) {
        //     $cpf = $_POST['cpf'];
        //     echo '<br> CPF: ' . $cpf;
        //     echo "<br> CPF digitado successfully !!! ";
        // }
        //     else{
        //         echo "<br> <br> CPF não inserido!!!!";
        //         echo "<br> <br> PREENCHE OS DADOS DO SEU CARTÃO !!!";
        // }

// ______________________________________









// if(isset($_POST)){

//     if( !empty($_POST['nome'])) {
//         $nome = $_POST['nome'];
//         echo $nome;
//     }
//     else{
//         echo "PREENCHE SEU NOME !!!";
//     }

}