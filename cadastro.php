<?php
session_start();
include_once 'conexao.php';

if(isset($_POST['nome'])){
    $sql = $pdo->prepare("INSERT INTO cadastro VALUES (null,?,?,?)");
    $sql->execute(array($_POST['nome'],$_POST['email'],$_POST['sexo']));
    echo "Dados inseridos com sucesso !";
}else{
    echo "Ocorreu algum erro ao salvar";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <button name="ir" ><a href="listar.php">Listar</a></button>
</body>
</html>