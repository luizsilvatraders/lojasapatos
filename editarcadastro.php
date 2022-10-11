<?php

$id = $_GET['id'];
$modelosapato = $_GET['modelosapato'];
$numero = $_GET['numero'];

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
        <h1>EDITAR CADASTROS DOS SAPATOS DA LOJA </h1>
    </header>
    <hr>
    <main>
        <form action="/lojasapatos/salvarcadastro.php">
        <input type="hidden" name="id" value="<?php echo $id ?>">

            <!--variavel modelosapato vai receber la na url GET-->   
            <label for="modelosapato">modelosapato:</label>
            <input type="text" id="modelosapato" name="modelosapato" required autocomplete="off">

            <!--variavel numero vai receber la na url GET-->          
            <label for="numero">numero:</label>
            <input type="text" id="numero" name="numero" autocomplete="off">


            <input type="submit" value="Editar cad.Sapato" />
   
        </form>
    </main>
</html>
</body>