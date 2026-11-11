<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $num3;
        private float $resultado;
        private float $celsius;
        private float $valor;
        private float $anos;
        
        //Criando um construtor = Instância as variáveis -> Cria as variáveis na memória do servidor
        public function __construct(){
            $this->num1      = 0;
            $this->num2      = 0;
            $this->resultado = 0;
        }//fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function somarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2; 
            return $this->resultado;
        }//fim do método somar

        public function subtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        }//fim do método subtrair

        public function multiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//fim do método multiplicar

        public function dividirDoisNumeros(float $num1, float $num2){
            if($num2 <= 0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }//fim do método dividir

        public function dobroUmNumero(float $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;
        }//fim do método dobro

        public function mediaTresNumeros(float $num1, float $num2, float $num3){
            $this->resultado = ($num1 + $num2 + $num3) / 3;
            return $this->resultado;
        }//fim do método média Tres

        public function raizQuadradaNumero(float $num1){
            $this->resultado = sqrt($num1);
            return $this->resultado;
        }//fim do método raiz quadrada

        public function metrosCovertaCentimetrosNumeros(float $num1){
            $this->resultado = ($num1) * 100;
            return $this->resultado;
        }//fim do método Metros Coverta Centimetros

        public function calcularAreaCirculo(float $num1){
            $this->resultado = $num1 * pi();
            return $this->resultado;
        }//fim do método Calcular Área Circulo 

        public function celsiusParaFahrenheit(float $num1){
            $this->resultado = ($num1 * 1.8) + 32;
            return $this->resultado;
        }//fim do método Celsius Para Fahrenheit

        public function desconto(float $num1){
            $this->resultado = $num1 * 0.90;
            return $this->resultado;
        }//fim do método Metros Deconto

        public function idade(float $anos){
            $this->resultado = $anos * 12;
            return $this->resultado;
        }//fim do método idade

      public function parImpar(float $num){
            if($num % 2 == 0){
                return "Par";
            }else{
                return "Ímpar";
            }
       }//fim do par ou impar
       
       public function areaTriangulo(float $num1, float $num2){
            $this->resultado = ($num1 * $num2) / 2;
            return $this->resultado;
        }//fim do Area ou Triangulo

        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }//fim do delta

        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if($del < 0){
                return "Impossível calcular X1 e X2, delta negativo!";
            }else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br><br> X2 = $x2";
            }
        }//fim do método
    }//fim da classe
?>