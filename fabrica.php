<pre>
<?php

require_once './Carro.php';
require_once './Motor.php';


$motor = new Motor();
$veiculo1 = new Carro($motor , "Azul");
//$veiculo2 = $veiculo1 ; // o objeto mantem o mesmo ID
$veiculo2 = clone $veiculo1;

$veiculo1->cor = "Vermelho";
$veiculo2->abastecer(15);



var_dump($veiculo1);

$veiculo1->acelerar(10);


echo "Potencia do motor: ".Motor::POTENCIA;
?>
</pre>