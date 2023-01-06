<?php 

	// strlower - string to lower 
	$texto = "Curso completo php";
	echo $texto;
	echo "<br>";
	echo "strtolower -> ".strtolower($texto);

	echo "<hr>";

	// strtoupper - string to upper 
	$texto = "Curso Completo de PHP";
	echo $texto;
	echo "<br>";
	echo "strtoupper -> ".strtoupper($texto);

	echo "<hr>";

	// ucfirst - Upper case first - primeira maiscula 
	$texto = "Curso Completo de PHP";
	echo $texto;
	echo "<br>";
	echo "ucfirst -> ".ucfirst($texto);


	echo "<hr>";

	// str_len - string lenght - conta caracteres strings
	$texto = "Curso Completo de PHP";
	echo $texto;
	echo "<br>";
	echo "strlen -> ".strlen($texto);


	echo "<hr>";

	// str_replace - string replace
	$texto = "Curso Completo de PHP";
	echo $texto;
	echo "<br>";
	echo "str_replace -> ".str_replace("PHP", "Javascript", $texto);

	echo "<hr>";

	// substr - substitute string
	$texto = "Curso Completo de PHP";
	echo $texto;
	echo "<br>";
	echo "substr -> ".substr($texto, 1,4 );

 ?>