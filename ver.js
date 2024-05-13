function excluirConta(id) {
    if (confirm("Tem certeza que deseja excluir esta conta?")) {
        $.ajax({
            type: "POST",
            url: "processar_exclusao.php",
            data: { id: id },
            success: function(response) {
                alert(response);
                location.reload();
            },
            error: function(xhr, status, error) {
                alert("Erro ao excluir a conta: " + error);
            }
        });
    }
}

function editarConta(id) {
    window.location.href = "editar_conta.php?id=" + id;
}

function filtrarPorDescricao() {
    var descricaoFiltro = document.getElementById("descricaoFiltro").value.toLowerCase();

    var linhasTabela = document.querySelectorAll("#tabelaContas tbody tr");

    linhasTabela.forEach(function (linha) {
        var descricaoLinha = linha.cells[0].innerText.toLowerCase();
        var corresponde = descricaoLinha.includes(descricaoFiltro);

        linha.style.display = corresponde ? "" : "none";
    });

    var mensagemNaoEncontrado = document.getElementById("mensagemNaoEncontrado");
    mensagemNaoEncontrado.style.display = linhasTabela.length > 0 ? "none" : "";
}