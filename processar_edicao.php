<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    include "conexao.php";

    $id_conta = $_POST["id"];
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
    $data_vencimento = $_POST["data_vencimento"];

    $sql = "UPDATE contas SET descricao = '$descricao', valor = '$valor', data_vencimento = '$data_vencimento' WHERE id = $id_conta";

    if ($conexao->query($sql) === TRUE) {
        header("Location: editar_conta.php?id=$id_conta");
        exit();
    } else {
        echo "Erro ao editar a conta: " . $conexao->error;
    }

    $conexao->close();
} else {
    echo "Requisição inválida para editar a conta.";
}
?>
