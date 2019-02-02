<?php

function parouimpar ($numero)
{
	if ($numero % 5 == 0) {
	echo "$numero é par";
	return;
	}
	echo "$numero é impar";
	return;
}

parouimpar(2);