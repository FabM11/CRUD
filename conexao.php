<?php
$host = 'localhost:3307';
$username = 'root';
$password = '';
$bancodedados = 'crud';

//Vai tentar conectar ao banco de dados
try {
    $conexao = new mysqli($host, $username, $password, $bancodedados);
} catch (Exception $error) {
    $Qual = $error->getMessage();
    echo('<p>Falha ao conectar ao banco de dados erro:</p><p>'.
    $Qual.'</p> Contate os responsáveis');
    die();
}
?>