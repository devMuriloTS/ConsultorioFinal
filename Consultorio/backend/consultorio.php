<?php 
    class Consultorio {
        private $nome;
        private $ano;
        private $peso;

        private $altura;

        private $imc;

        private $idade;

        public function __construct(){
            $this -> nome = "";
            $this -> ano = 0;
            $this -> peso = 0;
            $this -> altura = 0;
        }

        public function setNome($nome){
            $this -> nome = $nome;
        }

        public function setAno($anoNasc){
            $this -> ano = $anoNasc;
        }

        public function setPeso($peso){
            $this -> peso = $peso;
        }

        public function setAltura($altura){
            $this -> altura = $altura;
        }

        public function getNome(){
            return $this -> nome;
        }

        public function getAno(){
            return $this -> ano;
        }

        public function getPeso(){
            return $this -> peso;
        }

        public function getAltura(){
            return $this -> altura;
        }

        public function calcularIdade($anoNasc){
            $hoje = date('Y');
            $idade = $hoje - $anoNasc;
            
            $this -> idade = $idade;
        }

        public function calcularImc($peso, $altura){
            $imc = $peso / ($altura * $altura);

            $this -> imc = $imc;
        }

        public function imprimeResultado(){
             echo "Idade: " . $this -> idade . " <br> <br> IMC: " . $this -> imc;
        }
    }