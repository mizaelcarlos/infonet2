<?php 

include('ContaBancaria.php');
$conta_bancaria_maria_eduarda = new ContaBancaria('Maria Eduarda');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h1 class="cabecalhos">Lista de contas bancárias</h1>
    <p>Titular: <?php echo $conta_bancaria_maria_eduarda->titular; ?></p>
    <p>Saldo: <span class="saldo"><?php echo $conta_bancaria_maria_eduarda->extrato(); ?></span></p>
</body>
</html>