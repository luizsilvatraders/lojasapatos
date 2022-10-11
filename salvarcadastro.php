<?php

//comando vardump me forneceu os dados das variveis cadastradas modelosapato e numero
//var_dump($_GET);

//condiçao se inserir id vai ser id se nao vier nad vai cadastrar nada
$id = isset($_GET["id"]) ? $_GET["id"] : null;

//variavel modelosapato ta recebendo o dados cadastrado que veio variavel modelosapato
$modelosapato = $_GET["modelosapato"];

//variavel numero ta recebendo o dados cadastrado que veio variavel numero
$numero = $_GET["numero"];

$host = "localhost";
$user = "luiz";
$pass = "teste123";
$db = "lojasapatos";

//conexão ao BD
$conexao_bd =  new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//condição se se a variavel for null insira em listasaoatos o valor (:modelosapato, :numero)
if (is_null($id)) {
    $query = $conexao_bd->prepare("INSERT INTO listasapatos(modelosapato, numero)VALUE (:modelosapato, :numero)");
//se não coloque os dados (atualize)listasapatos modelosapato e numero 
} else {
    $sql = "UPDATE listasapatos SET modelosapato = :modelosapato, numero = :numero WHERE id = :id";

    //uma requisição."faça uma consulta ao BD"
    $query = $conexao_bd->prepare($sql);

    //PDOStatement::bindParam — Vincula um parâmetro ao nome da variável especificada
    $query->bindParam(":id", $id);
}

//Vincula um parâmetro ao nome da variável especificada
$query->bindParam(":modelosapato", $modelosapato);
//Vincula um parâmetro ao nome da variável especificada
$query->bindParam(":numero", $numero);


//executar 
$query->execute();

header('location: cadastro.php'); // redireciona para formulario.php