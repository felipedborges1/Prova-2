<?php

    include('conexao.php');

    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo']; 
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    $sql = "UPDATE fluxo_caixa set data = '$data', tipo = '$tipo', valor = '$valor', historico = '$historico', cheque = '$cheque', id = ".$id;
    $res = mysqli_query($con, $sql);

    if(mysqli_affected_rows($con) == 1){
        header("Location:listar_fluxo_caixa.php");
    } else{
        echo "Falha na gravação do registro<br>";
    }
?>