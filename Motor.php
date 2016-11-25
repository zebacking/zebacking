<?php



/**
 * Classe genérica de motor
 * @author Carlos Beltrame <beltrame@ieee.org>
 * 
 */


class Motor 
{
    private $potencia = 1.0;
    private $tipoCombustivel = "Flex";
    private $aceleracao = 0;
    
    /**
     * Acelera o motor
     * @param int $valor Valor da aceleracao de 0 a 100
     * @return int
     */
    public function acelerar($valor = 0)
    {
        $this->aceleracao = $valor;
        $potencia = $valor * $this->potencia;
        return $potencia;
        
    }
    
}
