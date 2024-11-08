<!-- http://localhost/php/Aula_%2010-23/Nova%20Pasta/index.html -->

<?php
if (isset($_POST)) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];

    // Verifica se nada foi preenchido
    if (empty($nome) && empty($idade) && empty($cpf)) {
        echo "<script>
                alert('VOCÊ NÃO PREENCHEU NADA NO CADASTRO!\\n\\nVOLTE E PREENCHE PARA CONTINUARMOS COM O SEU CADASTRO!!!!');
              </script>";
        
    } else {
        $faltou = false; // Flag para verificar se faltou algum campo

        // Verificações para campos individuais
        if (empty($nome)) {
            // echo "<br>Faltou preencher o nome";
            echo "<script> alert('FALTOU PREENCHER O NOME')</script>";
            $faltou = true;
        }
        if (empty($idade)) {
            // echo "<br>Faltou preencher a idade";
            echo "<script> alert('FALTOU PREENCHER A IDADE')</script>";
            $faltou = true;
        }
        if (empty($cpf)) {
            // echo "<br>Faltou preencher o CPF";
            echo "<script> alert('FALTOU PREENCHER O CPF') </script>";
            $faltou = true;
        }

        // Se faltou algum campo, exibe mensagem
        if ($faltou) {
            // echo "<br><br>Volte e preencha o que foi solicitado acima!!!";
            echo "<script>
            alert('Volte e preencha o que foi solicitado acima!!!')
            </script>";
        } else {
            // Se todos os campos foram preenchidos, você pode continuar o processamento aqui
            // echo "<br>HELLO, " . $nome . "!<br>";
            echo "<script> alert('OLÁ, $nome  !')</script>";

            // if($idade >= 18 && $idade <= 25){
            //     echo '<br>';
            //     echo "<h1> MUITO OBRIGADO POR FAZER O CADASTRO !!! </h1>";
            //     echo "<h2>Você já está pronto para servir!!!!!!! </h2>";
            //     echo "<br><br><br> <h1> COMO BONIFICAÇÃO...... </h1>";
            //     echo "<br><br><br><br><br><h4>Você será recrutado!!!</h4>";
                
            //     $x = 0;
            //     while ($x < 100) {
            //         // echo "<br><br><br><br><br><br>";
            //         echo "<h3>SEJA BEM VINDO RECRUTA !!!!!! </h3>";
            //         $x++;
            //     }
            // }
            // if($idade >= 26 && $idade <= 64){
            //     echo "<br> Seu tempo já passou!, Não pode mais servir o seu País!";
            // }
            // if($idade >= 65){
            //     echo "<br> O que você esta fazendo aqui  $nome  ????? VOCê esta aposentado!!!";

            // }   
            // if($idade < 18){
            //     echo "<br> Volte ano que vem!!!!!";
            //     echo "<br><br> Você tem apenas " . $idade . " anos.<br>";
            //     echo "<br><br> OBS.:";
            //     echo "<br> Você ainda é de MENOR !!!!";
            // }

            if (strlen($cpf) !== 11 || !ctype_digit($cpf)) {
                // echo "<br>CPF inválido! <br> O CPF deve ter 11 dígitos numéricos.";
                // echo "<script> alert('O CPF deve ter 11 dígitos numéricos
                // <p>Volte e preencha o que foi solicitado acima!!!</p>')</script>";
                echo "<script> alert('O CPF deve ter 11 dígitos numéricos.\\n Volte e preencha o que foi solicitado acima!!!');</script>";
            }
            else {
                // echo '<br>';
                // echo "<br>CPF digitado com sucesso!!!";
                echo "<script> alert('cpf digitado com sucesso !!!')</script>";

                
                if($idade < 18){
                    echo "<br> Volte ano que vem!!!!!";
                    echo "<br><br> Você tem apenas " . $idade . " anos.<br>";
                    echo "<br><br> OBS.:";
                    echo "<br> Você ainda é de MENOR !!!!";
                }

                if($idade >= 18 && $idade <= 25){
                    echo '<br>';
                    echo "<h1> MUITO OBRIGADO POR FAZER O CADASTRO !!! </h1>";
                    echo "<h2>Você já está pronto para servir!!!!!!! </h2>";
                    echo "<br><br><br> <h1> COMO BONIFICAÇÃO...... </h1>";
                    echo "<br><br><br><br><br><h4>Você será recrutado!!!</h4>";
                    
                    $x = 0;
                    while ($x < 100) {
                        // echo "<br><br><br><br><br><br>";
                        echo "<h3>SEJA BEM VINDO RECRUTA !!!!!! </h3>";
                        $x++;
                    }
                }
                if($idade >= 26 && $idade <= 45){
                    echo "<br> Seu tempo já passou!, Não pode mais servir o seu País!";
                }
                if($idade >= 46 && $idade <= 64){
                    echo "<br> A sua missão é outra: viver com qualidade, buscar novos objetivos e aproveitar cada momento.!";
                }
                if($idade >= 65){
                    echo "<br> O que você esta fazendo aqui  $nome  ????? <strong>VOCê esta aposentado!!!</strong>";
    
                }   
                
            }
        
        }
    }
}






        // if(empty($nome) && empty($idade) && empty($cpf)) {
        //     echo '<br>';
        //     echo "<br> Você não preencheu nada no cadastro! <br> <br> VOLTE E PREENCHE PARA CONTINUARMOS COM O SEU CADASTRO!!!!";
        // }else{
        //     if(empty($nome)){
        //         echo "<br>Faltou preencher o nome";
        //     }if(empty($idade)){
        //         echo "<br>Faltou preencher a idade";
        //     }if(empty($cpf)){
        //         echo "<br>Faltou preencher o cpf";
        //     }
        //         echo "<br> <br> Volte e preencha o que foi solicitado acima!!!";
        //     }
            
            
        
        
    
    // }
        // if(empty($cpf)) {
        //     echo '<br>';
        //     echo "<br> CPF não inserido! Volte e insere o CPF!";
        // } else {
        //     echo '<br>';
        //     echo "CPF digitado successfully !!! ";
        // }



    

    // echo "bem vindo " . $nome . " voce tem " . $idade ." anos";
    //         echo '<br>';
    //         echo '<br>';
    //         echo '<br>';