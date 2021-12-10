<?php 
error_reporting(E_ALL);
echo "-------test falabella--------<br>";

$reemplazos = array(
		array('id'=>3, 'texto'=>'Falabella'),
		array('id'=>5, 'texto'=>'IT'),
		array('id'=>15, 'texto'=>'Integraciones'),//todo numero divisible de 3*5, es divisible por 3 y por 5 a la vez
		
);

$numeros = array();

for($i=1; $i<=100 ;$i++){
		array_push($numeros, $i);
}


foreach($numeros as &$num){

		$num = array_reduce($reemplazos, function($a, $item) use($num){

				if( $num%$item['id']==0)
						$a = $item['texto'];
				
				return $a;	
		
		}, $num );

		echo $num.'<br>';
}


echo "-----------fin-----------";

?>
