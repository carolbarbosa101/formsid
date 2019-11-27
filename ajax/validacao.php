<?php

$campo = $_GET['campo'];
$valor = $_GET['valor'];
session_start();
// Verificando o campo login
if ($campo == "captcha") {

    if (strtolower($valor) != strtolower($_SESSION['captcha'])) {
        echo "Preencha o código corretamente";
    } elseif (strlen($valor) > 28) {
        echo "O login deve ter no mï¿½ximo 28 caracteres";
    } elseif (strlen($valor) < 4) {
        echo "O login deve ter no minï¿½mo 4 caracteres";
    } elseif (!preg_match('/^[a-z\d_]{4,28}$/i', $valor)) {
        echo "O login deve conter somente letras e numeros.";
    }
    else{
         echo "<input class='btn' type='submit' id='enviar' name='enviar' value='Enviar Inscrição'/>";
    }
}

header("Content-Type: text/html; charset=UTF-8", true);
?>
