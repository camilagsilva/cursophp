<?php
//http://localhost:8080/teste.php?dia=1
$numero_dia_da_semana = (int) $_GET['dia'];

switch ($numero_dia_da_semana) {
	case 1:
	echo "Domingo";
	break;
	case 2:
	echo "Segunda-feira";
	break;
	case 3:
	echo "Terça-feira";
	break;
	case 4:
	echo "Quarta-feira";
	break;
	case 5:
	echo "Quinta-feira";
	break;
	case 6:
	echo "Sexta-feira";
	break;
	case 7:
	echo "Sabádo";
	break;
	default:
	echo "valor inválido";

}
