# Solucion
Numeros del 1 al 100 divisibles por 3, 5 y ambos respectivamente.
Creo un array asociativo con los multiplos 3, 5 y 15 con su texto a reemplazar.

##array de reemplazo
		$reemplazos = array(
				array('id'=>3, 'texto'=>'Falabella'),
				array('id'=>5, 'texto'=>'IT'),
				array('id'=>15, 'texto'=>'Integraciones'),
		);

##completando array de numeros del 1 al 100

		$numeros = array();

		for($i=1; $i<=100 ;$i++){
				array_push($numeros, $i);
		}

##Ciclo de identificacion de numeros
usando puntero se va reemplazando el valor obtenido por la funcion php <strong>array_reduce</strong>, en caso de no encontrar se retorna mismo valor original.
		foreach($numeros as &$num){

				$num = array_reduce($reemplazos, function($a, $item) use($num){

						if( $num%$item['id']==0)
								$a = $item['texto'];
				
						return $a;	
		
				}, $num );

				echo $num.'<br>';
		}

##observaciones
Es posible realizar todo dentro de un solo ciclo, pero creo que asi mejora la lectura.
