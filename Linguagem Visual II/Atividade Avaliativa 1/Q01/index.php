<?php

/*1. Crie uma classe em PHP chamada Fatura para uma loja de suprimentos de informática. A classe deve conter quatro atributos – o número (String), a descrição (String), a quantidade comprada de um item (int) e o preço por item (double). A classe deve ter um método get (para acessar os valores dos atributos) e set(para inserir os valores nos atributos) para cada atributos. Além disso, forneça um método chamado getTotalFatura que calcula o valor da fatura e retorna o valor total. Se o valor não for positivo, ele deve ser configurado como 0. Se o preço por item não for positivo, ele deve ser configurado como 0.0. Na index demonstre as capacidades da classe Fatura.*/

include 'Fatura.php';

/*Declaração do objeto*/

$fatura1 = new Fatura();
$fatura1->setNumero(12);
$fatura1->setDescricao("Celular");
$fatura1->setQuantidade(7);
$fatura1->setPreco(1000.50);

/*Impressão da classe*/

$total=$fatura1->getTotalFatura();

echo "FATURA\n";
echo "Número da fatura: {$fatura1->getNumero()}\n";
echo "Descrição da fatura: {$fatura1->getDescricao()}\n";
echo "Quantidade de itens: {$fatura1->getQuantidade()}\n";
echo "Preço do item: R$ {$fatura1->getPreco()}\n";
echo "O valor total da fatura é de: R$ $total";

?>