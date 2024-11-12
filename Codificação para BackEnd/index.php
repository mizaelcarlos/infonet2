<?php



include('Emprestimo.php');
include('Carro3.php');

// $emprestimo1 = new Emprestimo(1,'2024-11-07','2024-11-10','2024-11-15',0,'03019076331');
// $emprestimo1->getId();
// echo $emprestimo1->calcularMulta();

$carro_onix = new Carro();
$carro_onix->setMarca('Chevrolet');
$carro_onix->setModelo('Onix Joy');
$carro_onix->setAno(2019);

?>

<table>
    <thead>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Ano</th>
    </thead>

    <tbody>
        <td><?php echo $carro_onix->getMarca();?></td>
        <td><?php echo $carro_onix->getModelo();?></td>
        <td><?php echo $carro_onix->getAno();?></td>
    </tbody>
</table>

