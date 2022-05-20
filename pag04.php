<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 
	$peso = $_REQUEST['peso'];
	$altura = $_REQUEST['altura'];
	$imc = $peso /($altura * $altura);

	if ($imc > 25) {
		echo "Você esta acima do peso";
		echo "<br>"."Seu IMC é: ".$imc."<br><img src='imc2.jpg'>";
	}else{
		echo "Você estra saudavel";
		echo "<br>"."Seu IMC é: ".$imc."<br><img src='imc1.jpg'>";
	}


 ?>

 </body>
</html>