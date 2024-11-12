<?php 

include('ContaBancaria.php');
$conta_bancaria_maria_eduarda = new ContaBancaria('Maria Eduarda');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de contas bancárias</h1>
    <p>Titular: <?php echo $conta_bancaria_maria_eduarda->titular; ?></p>
    <p>Saldo: <?php echo $conta_bancaria_maria_eduarda->extrato(); ?></p>
</body>
</html>