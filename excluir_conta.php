<?php
if (isset($_GET['id'])) {
    $id_conta = $_GET['id'];

    include "conexao.php";

    $sql = "DELETE FROM contas WHERE id = $id_conta";
    if ($conexao->query($sql) === TRUE) {
        echo "Conta excluída com sucesso.";
    } else {
        echo "Erro ao excluir a conta: " . $conexao->error;
    }

    $conexao->close();
} else {
    echo "ID da conta não fornecido.";
}
?>

