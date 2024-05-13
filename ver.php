<?php
include "conexao.php";

$sql = "SELECT id, descricao, valor, data_vencimento FROM contas";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataVencimento = new DateTime($row["data_vencimento"]);
        $agora = new DateTime();
        $diasRestantes = $dataVencimento >= $agora ? $agora->diff($dataVencimento)->days : -1;
        $classeDestaque = $diasRestantes >= 0 ? "" : "vencimento-excedido";

        echo "<tr>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>R$ " . $row["valor"] . "</td>";
        echo "<td>" . $row["data_vencimento"] . "</td>";

        if ($diasRestantes != -1) {
            $plural = $diasRestantes == 0 ? "" : "s"; // Verifica se é singular ou plural
            echo "<td class='$classeDestaque'>" . ($diasRestantes + 1) . " dia$plural</td>";
        } else {
            echo "<td><span style='color: red; font-weight: bold;'>Vencimento Excedido!</span></td>";
        }

        echo "<td>";
        echo "<a class='button' href='#' onclick='excluirConta(" . $row["id"] . "); return false;'>Excluir</a>";
        echo "    ";
        echo "<a class='button' href='#' onclick='editarConta(" . $row["id"] . "); return false;'>Editar</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Nenhuma conta encontrada.</td></tr>";
}

$conexao->close();
?>