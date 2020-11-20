function valida() {
    var retorno = true;

    if (!ValidaTexto("NomeAluno", ""))
        retorno = false;
    if (!ValidaTexto("Email", ""))
        retorno = false;
    if (!ValidaTexto("NomeMae", ""))
        retorno = false;
    if (!ValidaTexto("NomePai", ""))
        retorno = false;

    return retorno;
}

function ValidaTexto(nomeCampo, mensagem) {
    var campo = document.getElementById(nomeCampo).value;

    if (mensagem.length === 0)
        mensagem = "O campo é obrigatório";

    if (campo.length === 0) {
        document.getElementById("erro" + nomeCampo).innerHTML = mensagem;
        return false;
    } else {
        document.getElementById("erro" + nomeCampo).innerHTML = "";
        return true;
    }
}