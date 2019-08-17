<?php 
	$uma_array = [];
	$vetor_par = [];
	$vetor_impar = [];
	for($i = 0; $i < 20; $i++){
		echo "Digite um numero: \n ";
		$uma_array[] = fgets(STDIN);
	}

	for($i = 0; $i < 20; $i++){
		if($uma_array[$i]%2 == 0){
			$vetor_par[] = $uma_array[$i];
		}else{
			$vetor_impar[] = $uma_array[$i];
		}

	} 
	print_r($uma_array);
	echo "Pares:";
	print_r($vetor_par);
	echo "Impares:";
	print_r($vetor_impar);
 ?>