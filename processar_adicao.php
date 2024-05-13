<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conexao.php";

    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
    $data_vencimento = $_POST["data_vencimento"];

    $sql = "INSERT INTO contas (descricao, valor, data_vencimento) VALUES ('$descricao', '$valor', '$data_vencimento')";

    if ($conexao->query($sql) === TRUE) {
        header("Location: adicionar_conta.php");
        exit();
    } else {
        echo "Erro ao adicionar a conta: " . $conexao->error;
    }

    $conexao->close();
} else {
    echo "Requisição inválida para adicionar a conta.";
}
?>
