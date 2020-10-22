<?php
    class Conta{
        private  $cpfTitular;
        private  $nomeTitular;
        private  $saldo;

        function sacar(float $valorSacar): void{
            if ($valorSacar > $this->saldo){
                echo "Valor insuficiente para saque.";
            }else{
                $this->saldo -= $valorSacar;
            }
        }

        function depositar(float $valordep): void{
            if ($valordep < 0){
                echo "Valor precisa ser positivo";
            }else{
                $this->saldo += $valordep;
            }
        }

        function transferir (float $valortrans, Conta $contaDestino): void{
            if ($valortrans > $this-> saldo){
                echo "Saldo indisponivel";
            }else{
                $this->sacar($valortrans);
                $contaDestino->depositar($valortrans);
            }
        }

        public function saldoValor ():float{
            return $this->saldo;
        }

        public function titularCpf(): string{
            return $this->cpfTitular;
        }

        public function nometitu(): string{
            return $this->nomeTitular;
        }

        public function defineCPF(string $cpf){
            $this->cpfTitular = $cpf;
        }
    }
