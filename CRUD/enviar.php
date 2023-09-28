<?php
include_once('../conexao.php');
?>

<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$numero = $_POST['numero'];
$email = $_POST['email'];

//Declaração de preparo (prepare statement), pra que isso ? para que o usuário não possa fazer alguma alteração grave no banco de dados
//Essa declaração tem 2 fases o preparo e bind e execute (vincular e executar)

//Primeiro estágio prepare:
if(!($declaracao = $conexao->prepare("INSERT INTO `usuarios` (`nome`, `idade`, `numero`, `email`) VALUES (?, ?, ?, ?);"))){
    //Significa: na tabela usuarios e nas colunas (coluna*) coloque os valores (), esses ? é para informar que vai receber
    //uma quantidade específica de valores no caso 4 já que tem 4 ?
    echo "Erro no estágio prepare por favor contate o responsável pelo back-end da aplicação web, erro:
     (" . $mysqli->errno . ") " . $mysqli->error;
}

//Segundo estágio bind e prepare:
if(!$declaracao->bind_param("siis", $nome, $idade, $numero, $email)) {
    //esse "s" do bind_param é string ou seja, ele vai receber uma string, o mesmo com "i" vai receber um INT
    echo "Erro na vinculação de parametros por favor contate o responsável pelo back-end da aplicação web, erro: 
    (" . $declaracao->errno . ") " . $declaracao->error;
}

if (!$declaracao->execute()) {
    echo "Erro na execução por favor contate o responsável pelo back-end da aplicação web, erro:
     (" . $declaracao->errno . ") " . $declaracao->error;
}

//Quando acabar a execução ele vai para a pag:
header('Location:../app/enviosucess.php');
?>