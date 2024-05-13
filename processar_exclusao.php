<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    include "conexao.php";

    $id_conta = $_POST["id"];

    $sql = "DELETE FROM contas WHERE id = $id_conta";

    if ($conexao->query($sql) === TRUE) {
        echo "Conta excluída com sucesso.";
    } else {
        echo "Erro ao excluir a conta: " . $conexao->error;
    }

    $conexao->close();
} else {
    echo "Requisição inválida para excluir a conta.";
}
?>
