<?php
    include('conexao.php');
    $id = $_GET['id'];

    $query = "delete from fluxo_caixa where id = ".$id;
    $res = mysqli_query($con, $query);
    if(mysqli_affected_rows($con) == 1){
        header("Location:listar_fluxo_caixa.php");
    } else{
        echo "Falha ao excluir fluxo_caixa<br>";
    }
?>
    <a href="listar_fluxo_caixa.php">Voltar</a>