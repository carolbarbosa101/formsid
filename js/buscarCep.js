function buscarCep(valor) {
        var cep = valor.replace(/\D/g, '');
        document.getElementById('endereco').value = "...";
        document.getElementById('bairro').value = "...";
        document.getElementById('cidade').value = "...";
        document.getElementById('estado').value = "...";

        var script = document.createElement('script');

        script.src = 'http://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

        document.body.appendChild(script);

}
            
function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        document.getElementById('endereco').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('estado').value = (conteudo.uf);

    } else {

        limpa_formulário_cep();
    }
}