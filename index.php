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
    var_dump($lista);
