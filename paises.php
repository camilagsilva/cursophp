<?php
$estados = file_get_contents('http://www.geonames.org/childrenJSON?geonameId=3469034');
$estados = json_decode($estados,true);
echo "<pre>";
//print_r($estados);

foreach ($estados ['geonames'] as $estado => $dados) {
	echo "Estado: " . $dados['name'] ."<br>";
	echo "UF: " . $dados['adminCodes1'] ['ISO3166_2'] ."<br>";
	echo "População: " .$dados['population'] ."<br>";
	echo "<hr>";
}


