<?php

    $id = $_GET["id"];

    $host = "localhost";
    $user = "luiz";
    $pass = "teste123";
    $db = "lojasapatos";

    //conexão ao BD
    $conexao_bd =  new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "DELETE FROM listasapatos WHERE id = :id";

    $query = $conexao_bd->prepare($sql);

    $query->bindParam(":id", $id);

    $query->execute();

    header('location: cadastro.php'); // redireciona para formulario.php