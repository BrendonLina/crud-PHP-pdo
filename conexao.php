<?php 

$pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);