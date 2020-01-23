<?php

session_start();

include "conecta.php";
$objetoBase = new Conexao("localhost", "root", "", "form_tc");
$objetoBase->abrirConexao();
$con3ct = mysqli_connect("localhost", "root", "", "form_tc");
ini_set('smtp', 'smtp.ifb.edu.br');
ini_set('smtp_port', '3306');
if ($_POST) {
    $nomeInst = $_POST['nomeInst'];
    $cnpj = $_POST['cnpj'];
    $nomeTele = $_POST['nomeTele'];
    $situacaoTele = $_POST['situacaoTele'];
    $nomeRepresentante = $_POST['nomeRepresentante'];
    $cpfRe = $_POST['cpfRe'];
    $telefoneRe = $_POST['telefoneRe'];
    $emailRe = $_POST['emailRe'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $telefoneAl = $_POST['telefoneAl'];
    $email = $_POST['email'];

    $urlSite = isset($_POST['urlSite']) ? $_POST['urlSite'] : 'null';
    $nomeGestor = isset($_POST['nomeGestor']) ? $_POST['nomeGestor'] : 'null';
    $cpfGe = isset($_POST['cpfGe']) ? $_POST['cpfGe'] : 'null';

    $responsavelmesmo = $_POST['responsavelmesmo'];

    $telefoneRespo = isset($_POST['telefoneRespo']) ? $_POST['telefoneRespo'] : 'null';
    $emailRespo = isset($_POST['emailRespo']) ? $_POST['emailRespo'] : 'null';

    $qtdcomp = $_POST['qtdcomp'];
    $velobl = $_POST['velobl'];

    // $captcha = $_POST['captcha'];
    //-----------
    $nomeInst = mysqli_real_escape_string($con3ct, $nomeInst);
    $cnpj = mysqli_real_escape_string($con3ct, $cnpj);
    $nomeTele = mysqli_real_escape_string($con3ct, $nomeTele);
    $situacaoTele = mysqli_real_escape_string($con3ct, $situacaoTele);
    $nomeRepresentante = mysqli_real_escape_string($con3ct, $nomeRepresentante);
    $cpfRe = mysqli_real_escape_string($con3ct, $cpfRe);
    $telefoneRe = mysqli_real_escape_string($con3ct, $telefoneRe);
    $emailRe = mysqli_real_escape_string($con3ct, $emailRe);
    $estado = mysqli_real_escape_string($con3ct, $estado);
    $cidade = mysqli_real_escape_string($con3ct, $cidade);
    $bairro = mysqli_real_escape_string($con3ct, $bairro);
    $cep = mysqli_real_escape_string($con3ct, $cep);
    $endereco = mysqli_real_escape_string($con3ct, $endereco);
    $telefone = mysqli_real_escape_string($con3ct, $telefone);
    $telefoneAl = mysqli_real_escape_string($con3ct, $telefoneAl);
    $email = mysqli_real_escape_string($con3ct, $email);

    $urlSite = mysqli_real_escape_string($con3ct, $urlSite);
    $nomeGestor = mysqli_real_escape_string($con3ct, $nomeGestor);
    $cpfGe = mysqli_real_escape_string($con3ct, $cpfGe);
    $telefoneRespo = mysqli_real_escape_string($con3ct, $telefoneRespo);
    $emailRespo = mysqli_real_escape_string($con3ct, $emailRespo);
    $qtdcomp = mysqli_real_escape_string($con3ct, $qtdcomp);
    $velobl = mysqli_real_escape_string($con3ct, $velobl);

    //-----------
    //recupera data do servidor de bd
    $sql = "select sysdate()";
    $resposta = $objetoBase->abrirConsulta($sql);
    $data = $resposta[0];
    //-----------
    //-----------

    $resposta = $objetoBase->abrirConsulta($sql);
    //var_dump($resposta);
    //-----------
    if ($resposta != $cnpj) {
        if ($responsavelmesmo == "nao"){
            $sql = "INSERT INTO tb_cadastromc(horario_inscricao,nomeInst,cnpj,nomeTele,situacaoTele,nomeRepresentante,cpfRe,telefoneRe,emailRe,estado,cidade,bairro,cep,endereco,telefone,telefoneAl,email,urlSite,nomeGestor,cpfGe,telefoneRespo,emailRespo,qtdcomp,velobl) VALUES (SYSDATE(),'" . $nomeInst . "','" . $cnpj . "','" . $nomeTele . "','" . $situacaoTele . "','" . $nomeRepresentante . "','" . $cpfRe . "','" . $telefoneRe . "','" . $emailRe . "','" . $estado . "','" . $cidade . "','" . $bairro . "','" . $cep . "','" . $endereco . "','" . $telefone . "', '" . $telefoneAl . "','" . $email . "','" . $urlSite . "','" . $nomeGestor . "','" . $cpfGe . "','" . $telefoneRespo . "','" . $emailRespo . "','" . $qtdcomp . "','" . $velobl . "');";
                //print_r($sql);
            $teste = $objetoBase->executarSQL($sql);
            //var_dump($teste);
            
    //die();
            header("Location: cadastroEfetuado.php?nomeInst=$nomeInst&cnpj=$cnpj&nomeTele=$nomeTele&situacaoTele=$situacaoTele&nomeRepresentante=$nomeRepresentante&cpfRe=$cpfRe&estado=$estado&cidade=$cidade&bairro=$bairro&cep=$cep&endereco=$endereco&telefone=$telefone&telefoneAl=$telefoneAl&email=$email&urlSite=$urlSite&nomeGestor=$nomeGestor&cpfGe=$cpfGe&qtdcomp=$qtdcomp&velobl=$velobl&telefoneRe=$telefoneRe&telefoneRespo=$telefoneRespo&emailRe=$emailRe&emailRespo=$emailRespo");
        }else{
            $sql = "INSERT INTO tb_cadastromc(horario_inscricao,nomeInst,cnpj,nomeTele,situacaoTele,nomeRepresentante,cpfRe,telefoneRe,emailRe,estado,cidade,bairro,cep,endereco,telefone,telefoneAl,email,urlSite,nomeGestor,cpfGe,telefoneRespo,emailRespo,qtdcomp,velobl) VALUES (SYSDATE(),'" . $nomeInst . "','" . $cnpj . "','" . $nomeTele . "','" . $situacaoTele . "','" . $nomeRepresentante . "','" . $cpfRe . "','" . $telefoneRe . "','" . $emailRe . "','" . $estado . "','" . $cidade . "','" . $bairro . "','" . $cep . "','" . $endereco . "','" . $telefone . "', '" . $telefoneAl . "','" . $email . "','" . $urlSite . "','" . $nomeRepresentante . "','" . $cpfRe . "','" . $telefoneRe . "','" . $emailRe . "','" . $qtdcomp . "','" . $velobl . "');";
            //print_r($sql);
            $teste = $objetoBase->executarSQL($sql);
            //var_dump($teste);
    //die();
            header("Location: cadastroEfetuado.php?nomeInst=$nomeInst&cnpj=$cnpj&nomeTele=$nomeTele&situacaoTele=$situacaoTele&nomeRepresentante=$nomeRepresentante&cpfRe=$cpfRe&estado=$estado&cidade=$cidade&bairro=$bairro&cep=$cep&endereco=$endereco&telefone=$telefone&telefoneAl=$telefoneAl&email=$email&urlSite=$urlSite&nomeGestor=$nomeRepresentante&cpfGe=$cpfRe&qtdcomp=$qtdcomp&velobl=$velobl&telefoneRe=$telefoneRe&telefoneRespo=$telefoneRe&emailRe=$emailRe&emailRespo=$emailRe");
        }
        //     
        //
    }
    //die();
}
?>
