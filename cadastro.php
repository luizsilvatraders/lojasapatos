<?php

    $host = "localhost";
    $user = "luiz";
    $pass = "teste123";
    $db = "lojasapatos";

    //conexão ao BD
    $conexao_bd =  new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //selecionando toda lista do BD
    $sql = "SELECT * FROM listasapatos ORDER BY id DESC";

    /*Uma query é um pedido de uma informação ou de um dado.
    Esse pedido também pode ser entendido como uma consulta,
    uma solicitação ou, ainda, uma requisição."faça uma consulta ao BD"*/
    $resultado = $conexao_bd->query($sql);

    //minha consulta me de todos resultados do BD
    $lista = $resultado->fetchAll();

    //mostre os dados da lista em array
    // var_dump($lista);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro da loja </title>
</head>
<body>
    <header>
        <h1>CADASTRE OS SAPATOS DA LOJA </h1>
    </header>
    <hr>
    <main>
        <form action="/lojasapatos/salvarcadastro.php">

            <label for="modelosapato">modelosapato:</label>
            <input type="text" id="modelosapato" name="modelosapato" required autocomplete="off">


            <label for="numero">numero:</label>
            <input type="text" id="numero" name="numero" autocomplete="off">


            <input type="submit" value="Cadastrar Sapato" />
        </form>
        <hr>
        <div>
        <h2>LISTA DE SAPATOS CADASTRADOS</h2>
            <ol>
                <?php
                foreach ($lista as $key => $sapato) {
                    echo '<li value="' . $sapato['id'] .  '">';

                    echo $sapato['modelosapato'] . '-' . $sapato['numero'];

                    echo '<a href="/lojasapatos/editarcadastro.php?id=' . $sapato['id']
                    . '&modelosapato=' . $sapato['modelosapato']
                    . '&numero=' . $sapato['numero'] . '">EDITAR</a> | ';

                    echo '<a href="/lojasapatos/deletarcadastro.php?id=' . $sapato['id'] . '">DELETAR</a>';
                    echo '</li>';
                }
                ?>
            </ol>
        </div>
    </main>
</body>
</html>