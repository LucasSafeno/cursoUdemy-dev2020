<?php 
/*
	 is_array(array) -> Verifica se o parametro é um array
	$array = array('Notebook', 'Teclado');
	$retorno = is_array($array);

	if($retorno){
		echo "Sim, é um array";
	}else{
		echo "Não, não é um array";
	}


	//array_keys() - retorna todas as chaves de um array
	$array = [1 => 'a', 7 => 'b', 18 => 'c'];
	echo "<pre>";
	echo print_r($array);
	echo "</pre>";

	$chaves_array = array_keys($array);

	echo "<pre>";
		echo print_r($chaves_array);
	echo "</pre>";
	*/


	//sort() - ordena array e reajusta os indices
	$array = array('Notebook', 'Teclado', 'cabo hdmi', 'mouse', 'gabinete', 'fonte atx');
	echo "<pre>";
		 print_r($array);
	echo "</pre>";

	sort($array); // true ou false - caso consiga ordenazra = true, caso não false
	echo "<pre>";
		 print_r($array);
	echo "</pre>";
 ?>