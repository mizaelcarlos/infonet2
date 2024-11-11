<?php



include('Emprestimo.php');

$emprestimo1 = new Emprestimo(1,'2024-11-07','2024-11-10','2024-11-15',0,'03019076331');
$emprestimo1->getId();
echo $emprestimo1->calcularMulta();

