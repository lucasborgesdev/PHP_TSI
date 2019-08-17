<?php 
	$uma_array = [];
	$vetor_par = [];
	$vetor_impar = [];
	for($i = 0; $i < 5; $i++){
		echo "Digite um numero: \n ";
		$uma_array[] = fgets(STDIN);
	}
	print_r($uma_array);
 ?>