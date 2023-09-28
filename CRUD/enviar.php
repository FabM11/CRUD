<?php
include_once('../conexao.php');
?>

<?php
$email = $_POST['email'];
$numero = $_POST['numero'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Declaração de preparo (prepare statement), pra que isso ? para que o usuário não possa fazer alguma alteração grave no banco de dados
//Essa declaração tem 2 fases o preparo e bind e execute (vincular e executar)

//Primeiro estágio prepare:
if(!($declaracaodepreparo = $conexao->prepare("INSERT INTO usuarios VALUES (?)"))){
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

//Segundo estágio bind e prepare:

?>