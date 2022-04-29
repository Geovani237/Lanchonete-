<?php
$conexao = myslqi_connect("localhost", "root", "", "lanchonete");

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$ingredientes = $_POST['ingredientes'];
echo "{$produtos} - {$preco} - {$ingredientes}";




myslqi_close($conexao);

?>