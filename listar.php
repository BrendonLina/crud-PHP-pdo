<?php 
session_start();
include_once 'conexao.php';

if(isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $pdo->exec("DELETE FROM cadastro WHERE id=$id");
    echo 'Deletado com sucesso o id: '.$id; 
}

$sql = $pdo->prepare("SELECT * FROM cadastro");
$sql->execute();

$fetchCadastro = $sql->fetchAll();

foreach ($fetchCadastro as $key => $value){
    echo '<a href="?delete='.$value['id'].'">(X)</a> ' .$value['nome']. ' | ' .$value['email']. ' | ' .$value['sexo'];

    echo '<hr>';

    echo '<button><a href="index.php">Voltar</a></button>';
}

?>