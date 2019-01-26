<?php

$numero = ($_GET ['numero']) ?? 5;
$numero = (int) $numero;
$resultado= 1;
echo "<h1> fatorial do $numero; </h1>";

for ($count = 1; $count <= $numero; $count++){
	$resultado =$count * $resultado;

	
}

echo $resultado;

$numero=3;
$resultado=1;
for($contador=numero;$contador >=1; $contador --){
	echo $contador."<br>";
}