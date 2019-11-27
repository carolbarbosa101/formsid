//script geral
function isCpf(cpf){
	exp = /\.|-/g;
	cpf = cpf.toString().replace(exp, "");
	var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));
	var soma1=0, soma2=0;
	var vlr =11;
	for(i=0;i<9;i++){
		soma1+=eval(cpf.charAt(i)*(vlr-1));
		soma2+=eval(cpf.charAt(i)*vlr);
		vlr--;
	}  
	soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));
	soma2 = (((soma2+(2*soma1))*10)%11);
   
	if(cpf == "11111111111" || cpf == "22222222222" || cpf ==
						"33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf ==
						"66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf ==
						"99999999999" || cpf == "00000000000" ){
				var digitoGerado = null;
	}else{
		var digitoGerado = (soma1*10) + soma2;
	}
 
	if(digitoGerado != digitoDigitado){
	   return false;
	}
	return true;
}
function isCpfFormatted(cpf) {
		var validCPF = /^\d{3}\.\d{3}\.\d{3}\-\d{2}$/;
		return cpf.match(validCPF);
}
 
(function($) {
		$.validator.addMethod("cpf", function(value, element, type) {
				if (value == "")
						return true;
			   
				if ((type == 'format' || type == 'both') && !isCpfFormatted(value))
						return false;
				else
						return ((type == 'valid' || type == 'both')) ? isCpf(value) : true;
			   
		}, function(type,element) {
				return (type == 'format' || (type == 'both' && !isCpfFormatted($(element).val()))) ?
								'Formato do CPF não é válido' : 'Por favor digite um CPF válido';
		});
})(jQuery);

$(function() {  
            $("#form1").validate({  
                //debug:false, //retira essa linha, para o form voltar a funcionar  
                rules: { 
                    "pessoa_cpf":{
                        cpf:  'format'
                    },
                    "cpfPref":{  
                        cpf: 'format' //valida tanto Formatação como os Digitos  
                        //caso não queira validar a formatação use => cpf: 'valid'  
                        //caso só queira validar a formatação use => cpf: 'format'  
                    }
                }  
            });  
			//----------------
 });
 