<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login | PNAID</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="http://www2.mcti.gov.br/templates/padraogoverno01/css/template-verde.css" type="text/css">
    <link rel="stylesheet" href="http://www2.mcti.gov.br/templates/padraogoverno01/bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <![endif]-->

    </head>

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



        <section>

           <div class="container">
            <div class="login col-md-12">
                <div class="row">

                    <div class="panel-body">

                        <form method="POST" action="validacao.php" style="text-align: center; margin-top: 100px;">
                            <div class="form-group">
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite seu usuário" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required>
                            </div>

                            <div class="row text-center">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div> 

    </section>


    <footer id="footer" style="margin: auto; width: 100%; bottom: 0; position: fixed;">
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
