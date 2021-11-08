<?php 
session_start();
include_once 'conexao.php';

$sql = $pdo->prepare("DELETE FROM cadastro Where id");
$sql->execute();