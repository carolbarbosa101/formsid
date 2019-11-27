<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
session_start();

require_once('php/puxarcidade.php');

$busca = 'SELECT * FROM tb_estados';

$result = $db->query($busca, PDO::FETCH_ASSOC) or die("erro");
?>

    <html xmlns="http://www.w3.org/1999/xhtml">

    <HEAD>
        <title>Formulário de inscrição PNAID</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.10.3.custom.css" />
        <link rel="stylesheet" href="http://www2.mcti.gov.br/templates/padraogoverno01/css/template-verde.css" type="text/css">

        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/estilo.css">
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
        <script type="text/javascript" src="js/carregarCep.js"></script>
        <script type="text/javascript" src="js/buscarCep.js"></script>
        <script type="text/javascript" src="js/validarTelefone.js"></script>
        <script type="text/javascript" src="js/validarURL.js"></script>
        <script type="text/javascript" src="js/mostrarOcultar.js"></script>
        
        <script type="text/javascript">
             function validarEmail(sEmail) {
                // filtros
                var emailFilter=/^.+@.+\..{2,}$/;
                var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/
                // condição
            if(!(emailFilter.test(sEmail))||sEmail.match(illegalChars)){
                return false;
            }else{
                return true;
            }
                }
        </script>

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
                cursor: pointer;
                display: block;
                width: 8px;
                color: #333;
                text-align: center;
                position: relative;
            }
            
            input[type=number] {
                -moz-appearance: textfield;
                appearance: textfield;
                margin: 0;
            }
        </style>

        <script>
            jQuery(function($) {
                $("#telefone").mask("(99)99999-9999");
                $("#telefoneAl").mask("(99)99999-9999");
                $("#telefoneRespo").mask("(99)99999-9999");
                $("#telefoneRe").mask("(99)99999-9999");
                $("#cnpj").mask("99.999.999/9999-99");
                $("#cpfRe").mask("999.999.999-99");
                $("#cpfGe").mask("999.999.999-99");
                $("#cep").mask("99999-999");
            });
        </script>



        <script>
            $(function() { // Handler for .ready() called.
                $('#reload').click(function() {
                    $('#captcha').attr('src', 'captcha.php?' + (new Date).getTime());
                });
            });
        </script>


    </HEAD>

    <body style="margin-top: -20px;">

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
                <form id="form1" action="Cadastrar.php" method="post">

                    <h3 class="titulo" style="text-align: center;">TERMO DE ADESÃO DE PONTO DE INCLUSÃO DIGITAL AO PROGRAMA NACIONAL DE FORMAÇÃO DE AGENTES DE INCLUSÃO DIGITAL - PNAID</h3>
                    <br>

                    <p>Prezado Gestor de Ponto de inclusão digital,</p>
                    <br>

                    <div style="float:left; width:30px;">
                        <p>1.</p>
                    </div>
                    <div style="margin-left:31px;">
                        <p style="text-align: justify;">Você está prestes a aderir ao Programa Nacional de Formação de Agentes de Inclusão Digital – PNAID. Este programa foi criado pelo Ministério da Ciência, Tecnologia, Inovações e Comunicações – MCTIC, mediante a <a href="http://pesquisa.in.gov.br/imprensa/jsp/visualiza/index.jsp?jornal=1&pagina=6&data=06/07/2017" target="_blank">Portaria nº 2081/2017/MCTIC</a> ,de 4/7/2017, publicado no Diário Oficial da União de 6/7/2017, para revitalizar os Ponto de Inclusão Digital - PID em todo o Brasil.</p>
                    </div>

                    <div style="float:left; width:30px;">
                        <p>2.</p>
                    </div>
                    <div style="margin-left:31px;">
                        <p style="text-align: justify;">O objetivo do PNAID é formar profissionais capacitados a atender, ajudar e ensinar os cidadãos na utilização de computadores e no acesso à Internet.</p>
                    </div>

                    <div style="float:left; width:30px;">
                        <p>3.</p>
                    </div>
                    <div style="margin-left:31px;">
                        <p style="text-align: justify;">Ao aderir ao Programa, você estará dando ao seu Ponto de Inclusão Digital - PID, se ele for selecionado, a oportunidade de indicar candidatos à realização do curso de Formação de Agentes de Inclusão Digital. A indicação de candidato(s) será feita, em data a ser divulgada pelo MCTIC, por meio de formulário próprio disponibilizado via Internet aos Ponto de Inclusão Digital - PID selecionados. O curso será ofertado na modalidade de ensino a distância – EAD, com 480 horas-aulas e duração de 10 meses.</p>
                    </div>

                    <div style="float:left; width:30px;">
                        <p>4.</p>
                    </div>
                    <div style="margin-left:31px;">
                        <p style="text-align: justify;">Os candidatos indicados pelo seu Ponto de Inclusão Digital - PID e que forem aprovados no processo seletivo vão iniciar o curso em 2020. Eles serão monitores que dedicarão, diariamente, duas horas para a realização do curso e mais duas horas para auxiliar o Ponto de Inclusão Digital - PID em suas atividades.</p>
                    </div>

                    
                    <div style="float:left; width:30px;">
                        <p>5.</p>
                    </div>
                    <div style="margin-left:31px;">
                        <p style="text-align: justify;">Para aderir ao PNAID, o seu Ponto de Inclusão Digital - PID deverá atender os requisitos exigidos no <u><a href="edital.pdf" target="_blank">Edital MCTIC N° 47/2017/SEI-MCTIC</a></u>.</p>
                    </div>

                    <div style="float:left; width:30px;">
                        <p>6.</p>
                    </div>
                    <div style="margin-left:31px;">
                        <p style="text-align: justify;">O primeiro passo é ler o Edital com atenção. Em seguida, deverá preencher o Termo de Adesão, tendo cuidado para informar corretamente todos os dados solicitados.</p>
                    </div>

                    <div style="float:left; width:30px;">
                        <p>7.</p>
                    </div>
                    <div style="margin-left:31px;">
                        <p style="text-align: justify;">Qualquer dúvida referente ao preenchimento deste Termo de Adesão poderá ser sanada por meio dos telefones (61) 2027-5458, (61) 2027-5370, de segunda a sexta-feira, em horário comercial, ou pelo e-mail: cofor@mctic.gov.br</p>
                    </div>
                    <br><br>
                    <center>
                        <h3><strong>TERMO DE ADESÃO</strong></h3>
                    </center>

                    <hr/><br>
                    <h4>DADOS DO PONTO DE INCLUSÃO DIGITAL (PID) </h4>

                    <div class="form-input">
                        <label for="nomeTele">Nome do PID (sem abreviações): <strong style="color: red;">*</strong></label>
                        <input type="text" id="nomeTele" name="nomeTele" class="required" required placeholder="Digite o nome do PID" style="width: 755px;" />
                    </div>




                    <div class="form-input">
                        <label for="cep">CEP: <strong style="color: red;">*</strong></label>

                        <input type="text" id="cep" name="cep" class="required" placeholder="Digite o cep do PID" required onblur="if(!pesquisacep(this.value)){
                                    $('#cepAlert').addClass('visible').removeClass('hidden');
                                }else{
                                   buscarCep(this.value);
                                    $('#cepAlert').addClass('hidden').removeClass('visible'); 
                             }console.log(pesquisacep(this.value)); console.log(buscarCep(this.value));" />


                        <div class="alert alert-danger hidden" id="cepAlert" role="alert">

                            <strong>CEP incorreto!</strong>
                        </div>



                        <div class="form-input">
                            <label for="estado">
                            Estado:<strong style="color: red;">*</strong><br />
                        </label>
                            <input name="estado" type="text" id="estado" style="width: 164.444px;" readonly/>

<!--
                                <select id="categoria-selecta" class="required" name="estado" required>
                            <option value="">
                                Selecione
                            </option>
-->

                            <?php
                            /*foreach ($result as $row) {
                                echo '<option value=' . $row['uf'] . '>' . $row['nome'] . '</option>';
                            }*/
                            ?>

<!--                        </select>-->
                        </div>

                        <div class="form-input">
                            <label for="cidade">
                            Cidade:<strong style="color: red;">*</strong>
                        </label>

                            <input name="cidade" type="text" id="cidade" style="width: 164.444px;" readonly/>

<!--
                             <div id="resultado">
                            <small>Aguardando....</small>
-->

                        </div>

                             <span id="loading"><img src="img/pequeno-loader.gif"></span>
                        </div>

                        <div class="form-input">
                            <label for="bairro">Bairro: <strong style="color: red;">*</strong></label>
                            <input type="text" id="bairro" name="bairro" class="required" placeholder="Digite o bairro onde o PID se localiza" required style="width: 755px;" />
                        </div>
                        <div class="form-input">
                            <label for="endereco">Endereço do PID: <strong style="color: red;">*</strong></label>
                            <input type="text" id="endereco" name="endereco" class="required" placeholder="Digite o endereço do PID" required style="width: 755px;" />
                        </div>
                        <br>

                        <div class="form-input">
                            <label for="telefone">Telefone: <strong style="color: red;">*</strong> </label>
                            <input type="text" id="telefone" name="telefone"  minlength="10" maxlength="11" placeholder="Apenas números." class="required" onblur="if (!validarTelefone(this.value)){
                                    this.value = '';  
                                    $('#telefonealert').addClass('visible').removeClass('hidden');
                                }else{
                                    $('#telefonealert').addClass('hidden').removeClass('visible');
                                }" />

                            <div class="alert alert-danger hidden" id="telefonealert" role="alert">

                                <strong>Telefone incompleto!</strong>
                            </div>


                        </div>

                        <div class="form-input">
                            <label for="telefoneAl">Telefone Alternativo: </label>
                            <input type="text" id="telefoneAl" name="telefoneAl" minlength="10" maxlength="11" placeholder="Apenas números." onblur="if (!validarTelefone(this.value)){
                                    this.value = '';  
                                    $('#telefonealertAlter').addClass('visible').removeClass('hidden');
                                }else{
                                    $('#telefonealertAlter').addClass('hidden').removeClass('visible');
                                }" />

                            <div class="alert alert-danger hidden" id="telefonealertAlter" role="alert">

                                <strong>Telefone incompleto!</strong>
                            </div>
                        </div>

                        <div class="form-input">
                            <label for="email">Email: <strong style="color: red;">*</strong></label>
                            <input type="email" id="email" name="email" placeholder="exemplo@email.com" class="required" required onblur="if(!validarEmail(this.value)){
                        
                        this.value = '';  
                                    $('#emailAlert').addClass('visible').removeClass('hidden');
                                }else{
                                    $('#emailAlert').addClass('hidden').removeClass('visible');
                                }" />

                            <div class="alert alert-danger hidden" id="emailAlert" role="alert">

                                <strong>Email incorreto</strong>
                            </div>
                        </div><br>

                        <div class="form-input">
                            <label for="situacao">O PID está em funcionamento? <strong style="color: red;"> *</strong></label>
                            <input type="radio" id="situacao" name="situacaoTele" value="Ativo" required /> Sim
                            <input type="radio" id="situacao" name="situacaoTele" value="Inativo" required /> Não <br><br>
                        </div>

                        <div class="form-input">
                            <label for="possuisite">O PID possui site na internet? <strong style="color: red;"> *</strong></label>
                            <input type="radio" id="possuisite" name="possuisite" value="sim" required onclick="if(document.getElementById('urlSite').disabled==true){document.getElementById('urlSite').disabled=false}" /> Sim
                            <input type="radio" id="possuisite" name="possuisite" value="nao" required onclick="if(document.getElementById('urlSite').disabled==false){document.getElementById('urlSite').disabled=true}" /> Não <br><br>
                        </div>

                        <div class="form-input">
                            <label for="urlSite">Se sim, qual endereço do site ou página online do PID? </label>
                            <input style="width: 600px;" type="url" id="urlSite" value="http://" name="urlSite" placeholder="formato: http://www.site.com.br" disabled="disabled" onblur="if(!validarURL(this.value)){
                       
                        this.value = '';  
                                    $('#url').addClass('visible').removeClass('hidden');
                                }else{
                                    $('#url').addClass('hidden').removeClass('visible');
                                }" />

                            <div class="alert alert-danger hidden" id="url" role="alert">

                                <strong>URL incorreta</strong>
                            </div>
                        </div><br>

                        <div class="form-input">
                            <label for="qtdcomp">Quantidade de computadores em funcionamento no PID: <strong style="color: red;">*</strong></label>
                            <input style="width: 200px;" type="number" id="qtdcomp" name="qtdcomp" class="required" required/>
                        </div><br>

                        <div class="form-input">
                            <label for="velobl">Velocidade da conexão com a internet: <strong style="color: red;"> *</strong></label>
                            <input type="radio" id="velobl" name="velobl" value="Menos de 1 Mbps" required /> Menos de 1 Mbps <br>
                            <input type="radio" id="velobl" name="velobl" value="Entre 1 e 5 Mbps" required /> Entre 1 e 5 Mbps <br>
                            <input type="radio" id="velobl" name="velobl" value="Acima de 5 Mbps" required /> Acima de 5 Mbps <br>
                            <input type="radio" id="velobl" name="velobl" value="Não possui conexão com a internet" required /> Não possui conexão com a internet
                        </div><br><br>


                        <h4>DADOS DA INSTITUIÇÃO E RESPONSÁVEL LEGAL</h4>

                        <div class="form-input">
                            <label for="nomeInst">Nome da Instituição Responsável pelo PID: <strong style="color: red;">*</strong> <button style="border: none; height: 25px;" type="button" class="btn btn-default" data-toggle="tooltip" title="Prefeitura, associação, ONG, etc">
                          ?
                      </button></label>
                            <input type="text" id="nomeInst" name="nomeInst" placeholder="Digite o nome da Instituição responsável" class="required" required/>
                        </div>

                        <div class="form-input">
                            <label for="cnpj">CNPJ: <strong style="color: red;">*</strong></label>
                            <input style="width: 280px;" type="text" id="cnpj" name="cnpj" maxlength="14" placeholder="Digite um CNPJ válido, somente números." class="required" required onblur="if (!validarCNPJ(this.value)) {
                            this.value = '';  
                            $('#alertCnpj').addClass('visible').removeClass('hidden');
                        }else{
                            $('#alertCnpj').addClass('hidden').removeClass('visible');
                        }" />

                            <div class="alert alert-danger hidden" id="alertCnpj" role="alert">

                                <strong>CNPJ Inválido!</strong>
                            </div>
                        </div>

                        <br>

                        <!-- <div class="form-input">
                        <label for="programaCon">Programa que contemplou a criação do Telecentro (BR / Comunitário / Outro - especificar): </label>
                        <input type="text" id="programaCon" name="programaCon" class="required" required/><strong style="color: red;">*</strong>
                    </div> -->

                        <div class="form-input">
                            <label for="nomeRepresentante">Nome completo do Representante Legal do PID: <strong style="color: red;">*</strong><button style="border: none; height: 25px;" type="button" class="btn btn-default" data-toggle="tooltip" title="Prefeito, Presidente, etc">
                          ?
                      </button></label>
                            <input type="text" id="nomeRepresentante" name="nomeRepresentante" placeholder="Digite o nome do representante" class="required" required/>
                        </div>

                        <div class="form-input">
                            <label for="cpfRe">CPF: <strong style="color: red;">*</strong></label>
                            <input style="width: 280px;" type="text" id="cpfRe" name="cpfRe" minlength="11" placeholder="Digite um CPF válido, somente números." class="required" required onblur="if (!validarCPF(this.value)) {
                            this.value = '';   
                            $('#alertCpfRe').addClass('visible').removeClass('hidden');
                        }else{
                            $('#alertCpfRe').addClass('hidden').removeClass('visible');
                        }" />

                            <div class="alert alert-danger hidden" id="alertCpfRe" role="alert">
                                <strong>CPF Inválido!</strong>
                            </div>
                        </div>
                        <br>

                        <div class="form-input">
                            <label for="telefoneRe">Telefone: <strong style="color: red;">*</strong></label>
                            <input type="text" id="telefoneRe" name="telefoneRe"  minlength="10" maxlength="11" placeholder="Apenas números." class="required" required style="width: 280px;" onblur="if (!validarTelefone(this.value)){
                                    this.value = '';  
                                    $('#teleAlertB').addClass('visible').removeClass('hidden');
                                }else{
                                    $('#teleAlertB').addClass('hidden').removeClass('visible');
                                }" />

                            <div class="alert alert-danger hidden" id="teleAlertB" role="alert">

                                <strong>Telefone incompleto!</strong>
                            </div>
                        </div>

                        <div class="form-input">
                            <label for="emailRe">Email: <strong style="color: red;">*</strong></label>
                            <input type="email" id="emailRe" name="emailRe" placeholder="exemplo@email.com" class="required" required style="width: 280px;" onblur="if(!validarEmail(this.value)){
                        
                        this.value = '';  
                                    $('#emailAlertB').addClass('visible').removeClass('hidden');
                                }else{
                                    $('#emailAlertB').addClass('hidden').removeClass('visible');
                                }" />

                            <div class="alert alert-danger hidden" id="emailAlertB" role="alert">
                                <strong>Email incorreto</strong>
                            </div>
                        </div> <br><br>

                        <h4 style="display: inline;">DADOS DO RESPONSÁVEL PELO ACOMPANHAMENTO DO PNAID</h4><button style="border: none; height: 25px; display: inline;" type="button" class="btn btn-default" data-toggle="tooltip" title="PNAID - PROGRAMA NACIONAL DE FORMAÇÃO DE AGENTES DE INCLUSÃO DIGITAL">
                          ?
                      </button>

                        <br><br>

                        <div class="form-input radio-inline">
                            <label for="possuisite">O responsável pelo acompanhamento do PNAID será o mesmo representante acima mencionado? <strong style="color: red;"> *</strong></label>

                            <label for="" clss="radio-inline"></label>
                            <input type="radio" style="margin:0px;" id="responsavelmesmo" name="responsavelmesmo" value="sim" required onclick="ocultar(this.value);" /> Sim

                            <input type="radio" style="margin:0px;" id="responsavelmesmoe" name="responsavelmesmo" value="nao" required onclick="mostrar(this.value);" /> Não <br><br>
                        </div>


                        <div class="form-input hidden formescoder">
                            <p>Caso não seja preencha os campos abaixo.</p><br>
                        <!--COMEÇA AQUI-->
                        </div>
                      

                            <div class="form-input hidden formescoder">
                                <label for="nomeGestor">Nome completo do responsável pelo acompanhamento do PNAID no Telecentro: <strong style="color: red;">*</strong></label>
                                <input type="text" id="nomeGestor" name="nomeGestor" placeholder="Digite o nome do responsável" class="required" required disabled/>
                            </div>

                            <div class="form-input hidden formescoder">
                                <label for="cpfGel">CPF: <strong style="color: red;">*</strong></label>
                                <input style="width: 280px;" type="text" id="cpfGe" name="cpfGe" maxlength="11" placeholder="Digite um CPF válido, somente números." class="required" disabled onblur="if (!validarCPF(this.value)) {
                            this.value = '';   
                            $('#alertCpfGe').addClass('visible').removeClass('hidden');
                        }else{
                            $('#alertCpfGe').addClass('hidden').removeClass('visible');
                        }" />

                            <div class="alert alert-danger hidden" id="alertCpfGe" role="alert">
                                <strong>CPF Inválido!</strong>
                            </div>
                            </div>

                            <div class="form-input hidden formescoder">
                                <label for="telefoneRespol">Telefone: <strong style="color: red; ">*</strong></label>
                                <input type="text" id="telefoneRespo" name="telefoneRespo" minlength="10" maxlength="11" placeholder="Apenas números." class="required" required style="width: 280px; " disabled 
                                   onblur="if (!validarTelefone(this.value)){
                                    this.value = '';  
                                    $('#teleAlertC').addClass('visible').removeClass('hidden');
                                }else{
                                    $('#teleAlertC').addClass('hidden').removeClass('visible');
                                }" />

                            <div class="alert alert-danger hidden" id="teleAlertC" role="alert">

                                <strong>Telefone incompleto!</strong>
                            </div>
                            </div>

                            <div class="form-input hidden formescoder">
                                <label for="emailRespol">Email: <strong style="color: red;">*</strong></label>
                                <input type="email" id="emailRespo" name="emailRespo" placeholder="formato: email@mail.com" class="required" required style="width: 280px;" disabled 
                                onblur="if(!validarEmail(this.value)){
                                    this.value = '';  
                                    $('#emailAlertRespo').addClass('visible').removeClass('hidden');
                                }else{
                                    $('#emailAlertRespo').addClass('hidden').removeClass('visible');
                                }" />

                            <div class="alert alert-danger hidden" id="emailAlertRespo" role="alert">
                                <strong>Email incorreto</strong>
                            </div>


                            </div>
                            <br>
                        <!--TERMINA AQUI-->

                        <!-- <div class="form-input">
                        <label for="cargoGe">Cargo do Gestor: </label>
                        <input type="text" id="cargoGe" name="cargoGe" class="required" required/><strong style="color: red;">*</strong>
                    </div> -->


                        <div class="form-input">
                            <input type="checkbox" name="declaro" value="declaro" required> * Declaro sob as penas da Lei que as informações prestadas são verdadeiras.<br><br>

                            <input type="checkbox" name="termo" value="termo" required> * Li e concordo com o teor do Edital.<br>
                        </div>
                        <br><br>

                        <div> <iframe name="edital" width="800" height="350" src="edital_edit.html"> </iframe> </div>

                        <br><br><br>


                        <img src="captcha.php?l=150&a=50&tf=20&ql=5"/> <form action="validar.php" name="form" method="post">
                        <input type="text" name="palavra"  />
                        <input type="submit" value="Validar Captcha" />
                        </form><br>
                        <label>Digite os caracteres acima: </label>
                        <br>
                        <input type="text" id="captcha" maxlength="4" onkeyup="validarDados('captcha', document.getElementById('captcha').value);" />
                        <div id="campo_captcha"> </div> <br>
                        <br>
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
                    <!-- separador para fins de acessibilidade --><span class="hide">&nbsp;</span>
                    <!-- fim separador para fins de acessibilidade -->
                    <a href="http://www.brasil.gov.br/" class="brasil pull-right"><img src="http://www2.mcti.gov.br/templates/padraogoverno01/images/brasil.png" alt="Brasil - Governo Federal"></a>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script type="text/javascript">
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
                $('[data-toggle="popover"]').popover()
            })
        </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

    </html>