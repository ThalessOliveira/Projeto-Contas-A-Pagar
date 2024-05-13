<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Adicionar Conta</title>
</head>
<body>
    <div class="container">
        <div class="content-box">
            <h1>Adicionar Nova Conta</h1>
            <form method="post" action="processar_adicao.php">
                <label for="descricao"><b>Descrição:</label>
                <input type="text" id="descricao" name="descricao" required class="input-style" placeholder="Digite aqui">
                <label for="valor">Valor:</label>
                <input type="number" id="valor" name="valor" required class="input-style" placeholder="Digite aqui">
                <label for="data_vencimento">Data de Vencimento:</label>
                <input type="date" id="data_vencimento" name="data_vencimento" required class="input-style" placeholder="Digite aqui"><br><br>
                <button type="submit" >Adicionar Conta</button> <a class='button' href="ver_contas.php">Ver Contas</a></b>
            </form>
            
        </div>
    </div>
</body>
</html>
