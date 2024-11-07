<!-- http://localhost/php/10-30/test30.php -->
<!-- NÃO USAR O LINK ACIMA, POIS ELE É A RESPOSTA DO CADASTRO.HTML -->

<!-- __________________________________________________________________________-->








<!-- USAR ESTE LINK -->
<!-- http://localhost/php/10-30/z_mostrar_lista.php -->
<!-- USAR ESTE LINK -->

<!-- __________________________________________________________________________ -->


<?php
// include 'conecta10-28.php';
include 'conecta.php';

$sql = "SELECT * FROM cliente";
$result = mysqli_query($con, $sql);

echo '<br>';
echo '<br>';
var_dump($result);

// echo '<br>';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc Cadastro2</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid green;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: rgb(43, 226, 80);
        }
    </style>
</head>
<body>
    <h1>Clientes cadastrados em Outubro</h1>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>cpf</th>
                <th>telefone</th>
                <th>email</th>
                <th>editar</th>
                <th>deletar</th>
                <th>senha</th>
                <th>status</th>
            </tr>
        </thead>

        <tbody>
        <?php
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $cpf = $row['cpf'];
                    $telefone = $row['telefone'];
                    $email = $row['email'];
                    $senha = $row['senha'];

                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $nome . '</td>
                    <td>' . $cpf . '</td>
                    <td>' . $telefone . '</td>
                    <td>' . $email . '</td>
                    <td> <a href="editar_cliente.php?id_cli='.$id.'"> Editar </a> </td>
                    <td> <a href="deletar_cliente.php?id_cli='.$id.'"> Excluir </a> </td>
                    <td>' . $senha . '</td>
                    <td><button>ATIVO</button></td>
                    
                    </tr>';
                }
            } else {
                echo '<tr><td colspan="7">Nenhum cliente encontrado.</td></tr>';
            }
        ?>
        </tbody>
    </table>
</body>
</html>
