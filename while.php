<?php

echo "<h1> while</h1>";
$contador = 0;
while ($contador <=15){
	echo $contador;
	$contador++;
}

echo "<h1>For<h1>";
for($contador=0; $contador <=10; $contador++){
	echo $contador;
}

echo "<h1>do while</h1>";
$contador =11;
do {
	echo $contador;
	$contador++;
}while($contador <=10;