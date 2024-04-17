<?php

/*1. Crie uma classe em PHP chamada Fatura para uma loja de suprimentos de informática. A classe deve conter quatro atributos – o número (String), a descrição (String), a quantidade comprada de um item (int) e o preço por item (double). A classe deve ter um método get (para acessar os valores dos atributos) e set(para inserir os valores nos atributos) para cada atributos. Além disso, forneça um método chamado getTotalFatura que calcula o valor da fatura e retorna o valor total. Se o valor não for positivo, ele deve ser configurado como 0. Se o preço por item não for positivo, ele deve ser configurado como 0.0. Na index demonstre as capacidades da classe Fatura.*/

class Fatura{

    private $numero;
    private $descricao;
    private $quantidade;
    private $preco;

/*Método get*/

public function getNumero(){
    return $this->numero;
}
public function getDescricao(){
    return $this->descricao;
}
public function getQuantidade(){
    return $this->quantidade;
}
public function getPreco(){
    return $this->preco;
}


/*Métodos set*/

public function setNumero($numero){
    $this->numero=$numero;
}
public function setDescricao($descricao){
    $this->descricao=$descricao;
}
public function setQuantidade($quantidade){
    $this->quantidade=$quantidade;
}
public function setPreco($preco){
    $this->preco=$preco;
}

/*Método Get para total da fatura*/

public function getTotalFatura(){
    if($this->preco < 0){
        $this->preco=0;
    }

    $total = $this->preco * $this->quantidade;
    
    if($total < 0){
        $total=0;
    }
    return $total;
}

}

?>