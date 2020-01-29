<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
	session_destroy();
  // Redireciona o visitante de volta pro login
	header("Location: login.php"); exit;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Painel | PNAID</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="http://www2.mcti.gov.br/templates/padraogoverno01/css/template-verde.css" type="text/css">
	<link rel="stylesheet" href="http://www2.mcti.gov.br/templates/padraogoverno01/bootstrap/css/bootstrap.min.css" type="text/css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <![endif]-->

        <style type="text/css">
        	a:link {
        		color: white;
        	}

        	/* link que foi visitado */
        	a:visited {
        		color: white;
        	}

        	/* mouse over */
        	a:hover {
        		color: white;
        	}

        	/* link selecionado */
        	a:active {
        		color: white;
        	}
        </style>

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
    			<h3>Bem vindo ao painel PNAID.</h3>
    			Olá, <?php echo $_SESSION['UsuarioNome']; ?>!


    			<a class="btn btn-primary" href="sair.php" role="button">Sair</a>
    			<br><br>

    			<p>Nome do : TESTE</p>
    			<p>Endereço do Telecentro: Teste</p>
    			<p>Bairro: Teste</p>
    			<p>Cidade: Teste</p>
    			<p>Nome completo do responsável pelo Telecentro:</p>
    			<br>

    			<a class="btn btn-primary" href="alterarsenha.php" role="button">Alterar Senha</a>
    			<a class="btn btn-primary" href="adicionar_alunos.php" role="button">Adicionar Alunos</a>
    			<br><br>

    			<div class="container">
  
    				<table class="table">
    					<thead>
    						<tr>
    							<th>Firstname</th>
    							<th>Lastname</th>
    							<th>Email</th>
    						</tr>
    					</thead>
    					<tbody>
    						<tr>
    							<td>John</td>
    							<td>Doe</td>
    							<td>john@example.com</td>
    						</tr>
    						<tr>
    							<td>Mary</td>
    							<td>Moe</td>
    							<td>mary@example.com</td>
    						</tr>
    						<tr>
    							<td>July</td>
    							<td>Dooley</td>
    							<td>july@example.com</td>
    						</tr>
    					</tbody>
    				</table>
    			</div>


    		</div>

    	</section>


    	<footer id="footer" style="margin: auto; width: 100%; bottom: 0;">
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