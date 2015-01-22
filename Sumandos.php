<?php 

/*Clase que evalua las celdas y obtiene combinaciones de sumandos de un valor.*/ 


class Sumandos{

/*Metodo recursivo que evalua y obtiene las combinaciones*/

	static function assess($curTotal, $bPosicion,$bNumElem,$curObjetivo,$curMejor,$curValores,$valpermitidos) {
		$contar=1;   

 		if( $bPosicion < $bNumElem ){
        	$valpermitidos[$bPosicion] = 0;	
			Sumandos::assess($curTotal, $bPosicion + 1,$bNumElem,$curObjetivo,$curMejor,$curValores,$valpermitidos);
        
			$valpermitidos[$bPosicion] = 1;
        	Sumandos::assess($curTotal + $curValores[$bPosicion], $bPosicion + 1,$bNumElem,$curObjetivo,$curMejor,$curValores,$valpermitidos);
    
		}else{
		
			if( (abs($curTotal - $curObjetivo) < abs($curObjetivo - $curMejor)) ){
            			$curMejor = $curTotal;
            		
				if( $curMejor == $curObjetivo ){
                		$blEncontrado = true;
                			for($n = 0; $n < $bNumElem; $n++){
                 				if($valpermitidos[$n]==1){
                    					echo $contar."<br>";//Regresa los valores
                  				}
				$contar=$contar+1;

               				 }
               
                		}	
            			for($n = 0; $n < $bNumElem; $n++){
                		//$valpermitidos[$n] = $valpermitidos[$n];
            			}
        		}
   		}
	} 


}



?>