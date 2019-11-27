
function pesquisacep(valor) {
    var cep = valor.replace(/\D/g, '');
    if (cep != "") {
        var validacep = /^[0-9]{8}$/;
        if (validacep.test(cep)) {
            return true;
        }else {
              limpa_formulário_cep();
              return false;
          }
    } else {
        limpa_formulário_cep();
        return false;
    }
}

function limpa_formulário_cep() {
    document.getElementById('cep').value = ("");
    document.getElementById('endereco').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('estado').value = ("");
}


