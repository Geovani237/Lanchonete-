<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 id = "titulo">TELA DE PRODUTOS</h1>
<form action="cadastra-produto.php" method="post">
    Produto:
    <input name = "produto" id = "produto">
    <br>
    Preço:
    <input name = "preco" id = "preco">
    <br>
    Ingredientes:
    <textarea name = "ingredientes" id = "ingredientes"></textarea>
    <br>
    <button type = "submit">Salvar</button>
</form>
    
</body>
</html>