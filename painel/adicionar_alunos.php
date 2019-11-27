<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
    <title>Adicionar Alunos | PNAID</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.10.3.custom.css" />
    <link rel="stylesheet" href="http://www2.mcti.gov.br/templates/padraogoverno01/css/template-verde.css" type="text/css">
    <link rel="stylesheet" href="http://www2.mcti.gov.br/templates/padraogoverno01/bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.js"></script>
    <script type="text/javascript" src="js/messages_pt_BR.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="ajax/funcs.js"></script>
    <script type="text/javascript" src="js/meuCodigo.js"></script>
    <script type="text/javascript" src="js/validador.js"></script>

        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <![endif]-->


        <script>
            function formatar(mascara, documento) {
                var i = documento.value.length;
                var saida = mascara.substring(0, 1);
                var texto = mascara.substring(i)

                if (texto.substring(0, 1) != saida) {
                    documento.value += texto.substring(0, 1);
                }
            }

        </script>

        <style type="text/css">

            input[type=number]::-webkit-inner-spin-button { 
                -webkit-appearance: none;
                cursor:pointer;
                display:block;
                width:8px;
                color: #333;
                text-align:center;
                position:relative;
            }
            input[type=number] { 
                -moz-appearance: textfield;
                appearance: textfield;
                margin: 0; 
            }

        </style>  

        <script>
            jQuery(function ($) {
                $("#telefonefixo").mask("(99)9999-9999");
                $("#telefoneAl").mask("(99)99999-9999");
                $("#telefoneRespo").mask("(99)99999-9999");
                $("#telefoneRe").mask("(99)99999-9999");
                $("#cnpj").mask("99999999999999");
                $("#cpfRe").mask("99999999999");
                $("#cpfGe").mask("99999999999");
                $("#cep").mask("99999-999");
            });
        </script>
    </HEAD>

    <body>

        <header>
            <div class="container">
                <div class="row-fluid accessibility-language-actions-container">                         
                    <div class="span8 accessibility-container">
                        <ul id="accessibility">
                            <li>
                                <a accesskey="1" href="#link-conteudo" id="link">
                                    Ir para o cadastro
                                    <span>1</span>
                                </a>
                            </li>
                            <li>
                                <a accesskey="4" href="#footer" id="link-rodape">
                                    Ir para o rodapé
                                    <span>4</span>
                                </a>
                            </li>
                        </ul>                       
                    </div>
                    <!-- fim div.span8 -->
                    <div class="span4 language-and-actions-container">
                        <h2 class="hide">Acessibilidade</h2>
                    </div>
                    <!-- fim div.span4 -->    
                </div>
                <div class="row-fluid">
                    <div id="logo" class="span8 big">
                        <a href="http://mc.gov.br/" title="Comunicações">
                            <span class="portal-title-1">Ministério da</span>
                            <h1 class="portal-title corto">Ciência, Tecnologia, Inovações e Comunicações</h1>
                            <span class="portal-description"></span>
                        </a>
                    </div>
                    <!-- fim .span8 -->
                    <!-- fim .span4 -->
                </div>
            </div>
        </header>


        <div id="div_conteudo" class="conteudo">
            <div class="container">
                <form id="form2" action="CadastrarAluno.php" method="post">

                    <h3 class="titulo" style="text-align: center;">CADASTRO DE ALUNO</h3>

                    <hr/>
                    <h4>Cadastro</h4>


                    <div class="form-input">
                        <label for="identificacao">Identificação (NIS, PIS/PASEP): <strong style="color: red;">*</strong></label>
                        <input type="text" id="identificacao" name="identificacao" class="required" required placeholder="(NIS, PIS/PASEP)" style="width: 755px;" />
                    </div><br>

                    <div class="form-input">
                        <label for="programaSocial">Participa de algum Programa Social? <strong style="color: red;"> *</strong><button style="border: none; height: 25px;" type="button" class="btn btn-default" data-toggle="tooltip" title="Programa Bolsa Família, Minha Casa minha Vida, Bolsa Verde - Programa de Apoio à Conservação Ambiental, etc.">
                          ? </button></label>

                          <input type="radio" id="programaSocial" name="programaSocial"  value="Sim" required onclick="if(document.getElementById('ProgramaSocial_nome').disabled==true){document.getElementById('ProgramaSocial_nome').disabled=false}" /> Sim
                          <input type="radio" id="programaSocial" name="programaSocial"  value="Não" required onclick="if(document.getElementById('ProgramaSocial_nome').disabled==true){document.getElementById('ProgramaSocial_nome').disabled=true}" /> Não <br><br>
                      </div>

                      <div class="form-input">
                        <label for="ProgramaSocial_nome">Qual? <strong style="color: red;">*</strong></label>
                        <input type="text" id="ProgramaSocial_nome" name="ProgramaSocial_nome" class="required" placeholder="Digite o nome do programa social que o aluno participa" required disabled="disabled" style="width: 755px; "/>           
                    </div><br>

                    <h4>Identificação da Pessoa</h4>

                    <div class="form-input">
                        <label for="bairro">Nome Completo: <strong style="color: red;">*</strong></label>
                        <input type="text" id="nome" name="nome" class="required" placeholder="Digite o nome completo" required style="width: 755px;"/>              
                    </div><br>

                    <div class="form-input">
                        <label for="sexo">Sexo: <strong style="color: red;"> *</strong></label>
                        <input type="radio" id="sexo" name="sexo" value="Masculino" required /> Masculino
                        <input type="radio" id="sexo" name="sexo" value="Feminino" required /> Feminino <br><br>
                    </div>

                    <div class="form-input">
                        <label for="cep">Data de Nascimento: <strong style="color: red;"/>*</strong></label>
                        <input type="date" id="datanascimento" name="datanascimento" class="required" required/>                                        
                    </div><br>

                    <div class="form-input">
                        <label for="nomemae">Nome Completo da Mãe: <strong style="color: red;">*</strong></label>
                        <input type="text" id="nomemae" name="nomemae" class="required" placeholder="Digite o nome completo da mãe" required style="width: 755px;"/>              
                    </div><br>

                    <div class="form-input">
                        <label for="nomepai">Nome Completo do Pai: <strong style="color: red;">*</strong></label>
                        <input type="text" id="nomepai" name="nomepai" class="required" placeholder="Digite o nome completo do pai" required style="width: 755px;"/>              
                    </div><br>

                    <h4>Documentos</h4>

                    <div class="form-input">
                        <label for="rg">RG: <strong style="color: red;">*</strong></label>
                        <input style="width: 280px;" type="number" id="rg" name="rg" maxlength="20" placeholder="Digite um RG válido, somente números" class="required" required />
                    </div><br>

                    <div class="form-input">
                        <label for="orgExpedicao">Órgão de Expedição: <strong style="color: red;">*</strong></label>
                        <input type="text" style="width: 280px;" id="orgExpedicao" name="orgExpedicao" class="required" placeholder="Digite o órgão expeditor do documento" required style="width: 755px;"/>              
                    </div>
                    <div class="form-input">
                        <label for="uf_doc">UF: <strong style="color: red;">*</strong> </label>
                        <input type="text" id="uf_doc" style="width: 280px;" name="uf_doc" placeholder="Digite o UF" class="required" required/>            
                    </div>

                    <div class="form-input">
                        <label for="dataExpedicao">Data de Expedição: <strong style="color: red;"/>*</strong></label>
                        <input type="date" id="dataExpedicao" style="width: 280px;" name="dataExpedicao" class="required" required/>                                        
                    </div>

                    <div class="form-input">
                        <label for="cpfRe">CPF: <strong style="color: red;">*</strong></label>
                        <input style="width: 280px;" type="number" id="cpfRe" name="cpfRe" maxlength="11" placeholder="Digite um CPF válido, somente números." class="required" required />
                    </div><br>  

                    <h4>Escolaridade</h4>

                    <div class="form-input">
                        <input type="radio" id="escolaridade" name="escolaridade"  value="Ensino Fundamental Incompleto" required /> Ensino Fundamental Incompleto <br>
                        <input type="radio" id="escolaridade" name="escolaridade"  value="Ensino Fundamental Completo" required /> Ensino Fundamental Completo <br>
                        <input type="radio" id="escolaridade" name="vescolaridade"  value="Ensino Médio Incompleto - Cursando 1º ano" required /> Ensino Médio Incompleto - Cursando 1º ano <br>
                        <input type="radio" id="escolaridade" name="vescolaridade"  value="Ensino Médio Incompleto - Cursando 2º ano" required /> Ensino Médio Incompleto - Cursando 2º ano <br>
                        <input type="radio" id="escolaridade" name="vescolaridade"  value="Ensino Médio Incompleto - Cursando 3º ano" required /> Ensino Médio Incompleto - Cursando 3º ano <br>
                        <input type="radio" id="escolaridade" name="vescolaridade"  value="Ensino Médio Completo" required /> Ensino Médio Completo <br>
                        <input type="radio" id="escolaridade" name="vescolaridade"  value="Ensino Superior Incompleto" required /> Ensino Superior Incompleto <br>
                        <input type="radio" id="escolaridade" name="escolaridade"  value="Ensino Superior Completo" required /> Ensino Superior Completo <br>
                    </div><br>

                    <h4>Informações para contato</h4>

                    <div class="form-input">
                        <label for="uf">UF: <strong style="color: red;">*</strong> </label>
                        <input type="text" id="uf" name="uf" placeholder="Digite o UF" class="required" required/>            
                    </div>

                    <div class="form-input">
                        <label for="cidade">Cidade: <strong style="color: red;">*</strong> </label>
                        <input type="text" id="cidade" name="cidade" placeholder="Digite a cidade" class="required" required/>            
                    </div>

                    <div class="form-input">
                        <label for="endereco">Endereço: <strong style="color: red;">*</strong> </label>
                        <input type="text" id="endereco" style="width: 500px;" name="endereco" placeholder="Digite o endereço" class="required" required/>            
                    </div>

                    <div class="form-input">
                        <label for="complemento">Complemento: <strong style="color: red;">*</strong> </label>
                        <input type="text" id="complemento" style="width: 500px;" name="complemento" placeholder="Digite o complemento" class="required" required/>            
                    </div>

                    <div class="form-input">
                        <label for="bairro">Bairro: <strong style="color: red;">*</strong> </label>
                        <input type="text" id="bairro" style="width: 500px;" name="bairro" placeholder="Digite o bairro" class="required" required/>            
                    </div>

                    <div class="form-input">
                        <label for="telefonefixo">Telefone Fixo: </label>
                        <input type="text" id="telefonefixo" name="telefonefixo" maxlength="14" placeholder="Apenas números."/> 
                    </div>

                    <div class="form-input">
                        <label for="telCelular">Telefone Celular: </label>
                        <input type="text" id="telCelular" name="telCelular" maxlength="14" placeholder="Apenas números."/> 
                    </div>

                    <div class="form-input">
                        <label for="email">Email: <strong style="color: red;">*</strong></label>
                        <input type="email" id="email" name="email" placeholder="formato: email@mail.com" class="required" required/>
                    </div><br>

                    <hr>

                    <div class="form-input">
                        <input type="checkbox" name="declaro" value="declaro" required> * Atesto que o (a) aluno (a) acima indicado está inscrito (a) na Seleção de monitor do Programa Nacional de Formação de Agente de Inclusão Digital.<br><br>
                    </div>

                    <br>


                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                </form>
            </div>
        </div>

        <footer id="footer">
            <div class="container container-menus">
                <div id="footer" class="row footer-menus">
                </div>
            </div>
            <div class="footer-logos">
                <div class="container">
                    <a href="http://www.acessoainformacao.gov.br/" class="logo-acesso pull-left"><img src="http://www2.mcti.gov.br/templates/padraogoverno01/images/acesso-a-informacao.png" alt="Acesso a Informação"></a>
                    <!-- separador para fins de acessibilidade --><span class="hide">&nbsp;</span><!-- fim separador para fins de acessibilidade --><a href="http://www.brasil.gov.br/" class="brasil pull-right"><img src="http://www2.mcti.gov.br/templates/padraogoverno01/images/brasil.png" alt="Brasil - Governo Federal"></a>
                </div>              
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script type="text/javascript">
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
              $('[data-toggle="popover"]').popover()
          })
      </script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
  </html>
