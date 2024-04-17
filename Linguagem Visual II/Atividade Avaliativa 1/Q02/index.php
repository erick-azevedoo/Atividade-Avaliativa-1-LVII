<?php

include "Empregado.php";

$empregado1 = new Empregado();
$empregado1->setNome("Alan");
$empregado1->setSobrenome("Silva");
$empregado1->setSal(1500.00);

$empregado2 = new Empregado();
$empregado2->setNome("Bianca");
$empregado2->setSobrenome("Pereira");
$empregado2->setSal(2000.00);

/*Impressão dos dados dos empregados*/
echo "EMPREGADO 1\n";
echo "Nome: {$empregado1->getNome()}\n";
echo "Sobrenome: {$empregado1->getSobrenome()}\n";
echo "Salário anual: {$empregado1->getSal()}\n";

$empregado1->getReajuste();

echo "Salário anual com reajuste: {$empregado1->getExibirEmpregado()}\n\n";

echo "----------------------------\n\n";

echo "EMPREGADO 2\n";
echo "Nome: {$empregado2->getNome()}\n";
echo "Sobrenome: {$empregado2->getSobrenome()}\n";
echo "Salário anual: {$empregado2->getSal()}\n";

$empregado2->getReajuste();

echo "Salário anual com reajuste: {$empregado2->getExibirEmpregado()}\n";



?>