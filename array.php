<?php
//echo "<pre>";
$dias = ['domingo','segunda','terça' ,'quarta','quinta','sexta','sabádo'];
$dias[] = 'sabádo';
foreach ($dias as $dia) {
	echo "$dia<br>";
}

foreach ($dias as $chave => $dia){
	echo "$chave -> $dia<br>" ;
}
//print_r($dias);
//var_dump($dias);
//echo $dias [6];
//echo "</pre>";
