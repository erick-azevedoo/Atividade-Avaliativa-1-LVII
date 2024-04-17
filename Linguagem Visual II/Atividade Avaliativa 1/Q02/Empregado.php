<?php

/*2. Crie uma classe em PHP chamada Empregado com os atributos – nome (String), sobrenome (String) e um salário mensal (double). A classe deve apresentar métodos get e set para cada atributos e um método receba a porcentagem do aumento e calcule o novo salário. No index.php crie dois objetos Empregado e exiba o salário anual de cada objeto. Então dê a cada Empregado um aumento de 10% e exiba novamente o salário anual de cada Empregado. */

class Empregado{
    private $nome;
    private $sobrenome;
    private $sal;

    /*Métodos get*/

    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getSal(){
        return $this->sal;
    }

    /*Métodos set*/

    public function setNome($nome){
        return $this->nome=$nome;       
    }

    public function setSobrenome($sobrenome){
        return $this->sobrenome=$sobrenome;       
    }

    public function setSal($sal){
        return $this->sal=$sal*12;       
    }

    /* Método que calcula o reajsute do salário */

public function getExibirEmpregado(){
    return $this->sal;
}

    public function getReajuste(){
        $reajuste = $this->sal * 0.1;
        $this->sal += $reajuste;
        return $this->sal;
    }
}

?>