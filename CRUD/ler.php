<?php
include_once('../conexao.php');
?>

<?php
$ler = $conexao->query('SELECT `nome`, `idade`, `numero` FROM `usuarios`');

if ($ler->num_rows > 0) {
    // output data of each row
    while($row = $ler->fetch_assoc()) {
      echo "Nome: " . $row["nome"]. " <br/> Idade: " . $row["idade"]. " <br/> Numero: " . $row["numero"]. "<br>";
    }
  } else {
    echo "0 results";
  }



//Quando acabar a execução ele vai para a pag:
//header('Location:../app/enviosucess.php');
?>