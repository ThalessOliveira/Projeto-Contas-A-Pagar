<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Ver Contas</title>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="ver.js"></script>
</head>
<body>
    <div class="container">
    <div class="list-container">
    <h2>Contas Pendentes</h2>

    <form onsubmit="filtrarPorDescricao(); return false;">
        <label for="descricaoFiltro">Filtrar por Descrição:</label>
        <input type="text" id="descricaoFiltro" name="descricaoFiltro" class="input-style" placeholder="Digite aqui">
        <button type="submit" class="button">Filtrar</button>
    </form>

    <table id="tabelaContas">
    <thead>
        <tr>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Data de Vencimento</th>
        <th>Dias Restantes</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        <?php
        include "ver.php";
        ?>
    </tbody>
    </table>
    <p id="mensagemNaoEncontrado" style="display:none; color: red;">Nenhuma conta encontrada com essa descrição.</p>
    <br><br>
    <a class='button' href="index.php">Voltar para a página inicial</a>
    </div>
    </div>
</body>
</html>
