# Solucion
<p>Creo un array asociativo con los multiplos 3, 5 y 15, con su texto a reemplazar. El valor de 15 se usa porque si un numero es divisible por la multiplicacion entre 3 y 5, entonces es divisibe por ambos numeros.</p>

## array de reemplazo
		$reemplazos = array(
				array('id'=>3, 'texto'=>'Falabella'),
				array('id'=>5, 'texto'=>'IT'),
				array('id'=>15, 'texto'=>'Integraciones'),
		);

## completando array de numeros del 1 al 100

		$numeros = array();

		for($i=1; $i<=100 ;$i++){
				array_push($numeros, $i);
		}

## Ciclo de identificacion de numeros
<p>usando puntero se va reemplazando el valor obtenido por la funcion php <strong>array_reduce</strong>, en caso de no encontrar se retorna mismo valor original.</p>

		foreach($numeros as &$num){

				$num = array_reduce($reemplazos, function($a, $item) use($num){

						if( $num%$item['id']==0)
								$a = $item['texto'];
				
						return $a;	
		
				}, $num );

				echo $num.'<br>';
		}

## observaciones
<p>Es posible realizar todo dentro de un solo ciclo, pero creo que asi mejora la lectura.</p>
<p>Intencionalmente he omitido las tildes.</p>

