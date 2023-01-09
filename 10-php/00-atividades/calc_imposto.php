<?php 



function calcImposto($salario){

	if($salario <= 1903.38){
		echo "Isento";
	}else if($salario <= 2826.65){
		$desconto = (7.5 / 100) * $salario;
		echo "Imposto a a pagar : ".number_format($desconto);
	}else if($salario <= 3751.05){
		$desconto = (15 / 100) * $salario;
		echo "Imposto a a pagar : ".number_format($desconto);
	}else if($salario <= 4664.68){
		$desconto = (22.5 / 100) * $salario;
		echo "Imposto a a pagar : ".number_format($desconto);
	}else if($salario > 4664.68){
		$desconto = (27.5 / 100) * $salario;
		echo "Imposto a a pagar : ".number_format($desconto);
	}


}// salario

calcImposto(5000);



 ?>