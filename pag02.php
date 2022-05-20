<?php 
	$valor1 = $_REQUEST['valor1'];
	$valor2 = $_REQUEST['valor2'];
	$resul = ($valor1 * 2) + ($valor2 *2);
	$area = $valor1 * $valor2;

	echo "Resultado da area ".$area;
	
	echo "<br><br>O perímetro do retângulo é ".$resul;


 ?>