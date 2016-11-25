<?php

class Carro
{
	const MODELO = "A3";
	const MARCA = "AUDI";
	
	
	public  $cor;
	private $motor;
	private $porta = 4 ;
	private $tanqueCombustivel = 0;
	
        /**
         * 
         * @param Motor $motor
         * @param string $cor
         */
	public function __construct(Motor $motor, $cor = "Branco")
	{
		$this->tanqueCombustivel = 10;
		$this->cor = $cor;
                $this->motor = $motor;
	}
	
        
        /**
         * Liga motor
         */
	public function ligar()
	{
	
	}
	
        /**
         * Delisga o motor
         */
	public function desligar()
	{
	
	}
	/**
         * Faz o carro andar
         * @param type $torque
         */
	private function andar($torque)
	{
            echo "andou ".$torque." metros\n";
	}
	
        
        /**
         * Abastece o veiculo
         * @param int $valor valor a ser colocado no tanque
         */
	public function abastecer($valor)
	{
		$this->tanqueCombustivel += $valor;
	}
	
        
        /**
         * Envia aceleracao ao motor
         * @param int $valor valor da aceleracao informada
         */
	public function acelerar($valor)
        {
            $torque = $this->motor->acelerar($valor); 
            $this->andar($torque);
        }
	
}


