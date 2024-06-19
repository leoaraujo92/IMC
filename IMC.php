<?php 

class Pessoa{

    private $nome;
    private $peso;
    private $altura;
    private $sexo;
    private $IMC; 

  /*  public function__construct($nome, $peso, $altura, $sexo){

        $this->setNome($nome);
        $this->setPeso($peso);
        $this->setAltura($altura);
        $this->setSexo($sexo);
    } */

   

    public function calcularIMC(){

         $this->setIMC($this->getPeso() / ($this->getAltura() ** 2));

        $IMC = number_format($this->getIMC(), 2, '.', '');

        echo "<p> Nome: " . $this->getNome() . "</p>";
        echo "<p> Peso: " . $this->getPeso() . "</p>";
        echo "<p> Altura: " . $this->getAltura() . "</p>";
        echo "<p> Sexo: " . $this->getSexo() . "</p>" ;
  

        if ($IMC < 18.5){
             echo "Seu IMC é " . $IMC . " você está abaixo do peso ideal";
        }
        elseif ($IMC > 18.5 && $IMC < 24.9){
            echo "Seu IMC é " . $IMC . " você está no peso ideal";
        }
        elseif ($IMC > 24.9 && $IMC < 29.9){
            echo "Seu IMC é " . $IMC . " você está com sobrepeso";
        }
        elseif ($IMC > 29.9 && $IMC < 39.9){
             echo "Seu IMC é " . $IMC . " você está com obesidade";
        }
        elseif ($IMC > 39.9){
            echo "Seu IMC é " . $IMC . " você está com obesidade GRAVE, Procure um médico";
        }


    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getIMC(){
        return $this->IMC;
    }

    public function setIMC($IMC){
        $this->IMC = $IMC;
    }
}

?>