function mostrar(chk) {
                if ($('#responsavelmesmo :checked')){
                    $(".formescoder").addClass("visible").removeClass("hidden");
                      if(document.getElementById('nomeGestor').disabled==true){
                          document.getElementById('nomeGestor').disabled=false;
                      }; 
                    if(document.getElementById('cpfGe').disabled==true){
                        document.getElementById('cpfGe').disabled=false;
                    }; 
                    if(document.getElementById('telefoneRespo').disabled==true){
                        document.getElementById('telefoneRespo').disabled=false;
                    }; 
                    if(document.getElementById('emailRespo').disabled==true){
                        document.getElementById('emailRespo').disabled=false;
                    };
                  
                }
            };

            function ocultar(chk) {
                if ($('#responsavelmesmoe :checked'))  {
                    $(".formescoder").addClass("hidden").removeClass("visible");
                    if(document.getElementById('nomeGestor').disabled==false){
                        document.getElementById('nomeGestor').disabled=true;
                    }; 
                    if(document.getElementById('cpfGe').disabled==false){
                        document.getElementById('cpfGe').disabled=true;
                    }; 
                    if(document.getElementById('telefoneRespo').disabled==false){
                        document.getElementById('telefoneRespo').disabled=true;
                    }; 
                    if(document.getElementById('emailRespo').disabled==false){
                        document.getElementById('emailRespo').disabled=true;
                    };
                }
            }