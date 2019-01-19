<form action="parouimpar.php" method="post">
	Digite um número:<input type="text" name="num1"><br>

	</select>
	<input type="submit" value="verificar">
</form>
<?php

$operacao = null;
$num1 = ($_POST['num1']) ?? null;
$num2 = "2" ?? null;
$operacao = $num1 % $num2;

if($operacao == '0'){
	echo "numero PAR";
}else
 echo "numero IMPAr";



