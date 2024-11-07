<?php

// echo " PAGINA PARA DELETAR O CLIENTE ";

include 'conecta.php';


if(isset($_GET['id_cli'])) {

    $id = $_GET['id_cli'];

echo '<br>';
echo "ID RECEBIDO COM SUCESSO Nº " . $id;
echo '<br>';
echo "<br> <h2>PAGINA PARA DELETAR O CLIENTE</h2>";


    $sql = "DELETE FROM cliente WHERE id= $id.";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "<script> alert('DELETADO COM SUCESSO !!') </script>";
        header('location: z_mostrar_lista.php');
    }
}