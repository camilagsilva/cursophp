<?php
$numero=5;
function fatorial ($numero){
$resultado = 1;
for($contador=$numero;$contador>=1;$contador--){
	$resultado = $resultado * $contador;
}
return $resultado;
}

echo "o fatoria do $numero é $fatorial";
