<?php
$numero_dia_da_semana = (int) $_GET ['dia'];

if($numero_dia_da_semana == 1) {
	echo "Domingo";}

	elseif($numero_dia_da_semana == 2) {
	echo "Segunda";}

	elseif($numero_dia_da_semana == 3) {
	echo "Terça-feira";}

	elseif($numero_dia_da_semana == 4) {
	echo "Quarta-feira";}

	elseif($numero_dia_da_semana == 5) {
	echo "Quinta-feira";}

	elseif($numero_dia_da_semana == 6) {
	echo "Sexta-feira";}

	elseif($numero_dia_da_semana == 7) {
	echo "Sabádo";}

    else{
	echo "valor inválido";
}