<?php
        include("conexao.php");
        $data = $_POST['data'];
        $tipo= $_POST['tipo'];
        $valor = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];
   
        echo "<h1>Dados do usuário <br></h1>";
        echo "Data: $data <br>";
        echo "Tipo: $tipo <br>";
        echo "Valor: $valor <br>";
        echo "Historico: $historico <br>";
        echo "Cheque: $cheque <br>";

        $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)";
        
    
        $sql .= " VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
        
                            
        echo $sql. "<br>";
        $result = mysqli_query($con, $sql);
        if($result)
        echo "Dados cadastrados com sucesso!";
        else
        echo"Erro ao tentar cadastrar!";
                        



?>

<div>
        <a href='index.php'>Voltar</a>
</div>