function validarTelefone(telefone) {
    console.log(telefone);
    var fone = telefone.replace(/[^\d]+/g,'').length;
                        console.log(fone);
                        if(fone > 9){
                            return true;
                        } else {
                            return false;
                        }
}