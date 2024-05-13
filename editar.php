<?php
        include "conexao.php";
            
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $id_conta = $_GET["id"];
        $sql = "SELECT descricao, valor, data_vencimento FROM contas WHERE id = $id_conta";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $descricao = $row["descricao"];
        $valor = $row["valor"];
        $dataVencimento = $row["data_vencimento"];

        echo "<form method='post' action='processar_edicao.php' style>";
        echo "<input type='hidden' name='id' value='$id_conta' class='input-style' placeholder='Digite aqui'>";
        echo "<b>Descrição:</b>";
        echo "<input type='text' id='descricao' name='descricao' value='$descricao' required class='input-style' placeholder='Digite aqui'>";
        echo "<b>Valor:</b>";
        echo "<input type='number' id='valor' name='valor' value='$valor' required class='input-style' placeholder='Digite aqui'>";
        echo "<b>Data de Vencimento:</b>";
        echo "<input type='date' id='data_vencimento' name='data_vencimento' value='$dataVencimento' required class='input-style' placeholder='Digite aqui'><br><br>";
        echo "<button class='button' type='submit'>Salvar Edição</button>";
        echo "</form>";


        } else {
            echo "Conta não encontrada.";
        }
        } else {
            echo "ID da conta não fornecido.";
        }
        
        $conexao->close();
?>