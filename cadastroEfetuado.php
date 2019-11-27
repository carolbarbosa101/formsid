<html>

    <head>
        <title>Cadastro efetuado!</title>

        <style type="text/css">

            .box {
                width: 700px;
                margin: 30px auto;
                background: #fff;
                padding: 20px;
                border-radius: 10px;
            }


        </style>

        <script LANGUAGE="JavaScript">

//<!-- Begin
            function varitext(text) {
                text = document
                print(text)
            }
//  End -->
        </script>


    </head>

    <body style="background: #95A5A6;">
        <?php
        $nomeInst = $_GET['nomeInst'];
        $cnpj = $_GET['cnpj'];
        $nomeTele = $_GET['nomeTele'];
        $situacaoTele = $_GET['situacaoTele'];
        $nomeRepresentante = $_GET['nomeRepresentante'];
        $cpfRe = $_GET['cpfRe'];
        $telefoneRe = $_GET['telefoneRe'];
        $estado = $_GET['estado'];
        $cidade = $_GET['cidade'];
        $bairro = $_GET['bairro'];
        $cep = $_GET['cep'];
        $endereco = $_GET['endereco'];
        $telefone = $_GET['telefone'];
        $telefoneAl = $_GET['telefoneAl'];
        $email = $_GET['email'];
        $urlSite = $_GET['urlSite'];
        $nomeGestor = $_GET['nomeGestor'];
        $cpfGe = $_GET['cpfGe'];
        $telefoneRespo = $_GET['telefoneRespo'];
        $qtdcomp = $_GET['qtdcomp'];
        $velobl = $_GET['velobl'];
        $emailRe = $_GET ['emailRe'];
        $emailRespo = $_GET ['emailRespo'];

        echo'<div class="box">
                 <div align="right">
                 <form>
                 <input name="print" type="button" value="Imprimir este documento!"
                 onclick="varitext()">
                 </form>
                 </div>
            <h2>Inscrição realizada com sucesso!</h2>
             ';
        echo'                           <strong>Nome do telecentro: </strong><p>' . $nomeTele . '</p>
                                        <strong>Endereço do telecentro: </strong><p>' . $endereco . '</p>
                                        <strong>Bairro: </strong><p>' . $bairro . '</p>  
                                        <strong>CEP: </strong><p>' . $cep . '</p>
                                        <strong>Telefone: </strong><p>' . $telefone . '</p>
                                        <strong>Telefone Alternativo: </strong><p>' . $telefoneAl . '</p>
                                        <strong>Email: </strong><p>' . $email . '</p>
                                        <strong>Estado: </strong><p><p>' . $estado . '</p>
                                        <strong>Cidade: </strong><p><p>' . $cidade . '</p>
                                        <strong>O telecentro está em funcionamento? </strong><p><p>' . $situacaoTele . '</p>    
                                        <strong>Qual a URL do site ou página online do Telecentro? </strong><p><p>' . $urlSite . '</p>
                                        <strong>Quantidade de computadores em funcionamento no Telecentro: </strong><p>' . $qtdcomp . '</p>
                                        <strong>Velocidade da conexão Banda Larga: </strong><p>' . $velobl . '</p>
                                        <strong>Nome da Instituição Responsável pelo Telecentro: </strong><p>' . $nomeInst . '</p>
                                        <strong>CNPJ: </strong><p>' . $cnpj . '</p>
                                        <strong>Nome completo do Representante Legal do Telecentro: </strong><p>' . $nomeRepresentante . '</p>
                                        <strong>CPF do representante: </strong><p>' . $cpfRe . '</p>
                                        <strong>Telefone do representante: </strong><p>' . $telefoneRe . '</p>
                                        <strong>Email do representante: </strong><p>' . $emailRe . '</p>
                                        <strong>Nome completo do responsável pelo Telecentro: </strong><p>' . $nomeGestor . '</p>
                                        <strong>CPF do responsável: </strong><p>' . $cpfGe . '</p>
                                        <strong>Telefone do responsável: </strong><p>' . $telefoneRespo . '</p>
                                        <strong>Email do responsável: </strong><p>' . $emailRespo . '</p>
                                        </div>'


        ?>       

    </body>

</html>