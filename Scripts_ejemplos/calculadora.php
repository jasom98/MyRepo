<?php
// Mi Calculadora Basica
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$op=$_POST['operar'];
echo "Numero 1: ".$n1;
echo "<br>Numero 2: ".$n2;
echo "<br>Operacion: ".$op;
/*switch($op){
	case "s":  
	echo " la suma es: " .($n1+$n2);
	break;
	case "r":  
	echo " la suma es: " .($n1-$n2);
	break;
	case "m":  
	echo " la suma es: " .($n1*$n2);
	break;
	case "d":  
	echo " la suma es: " .($n1/$n2);
	break;	
}
*/
// con if
if ($op == "s")
echo "La suma es: ".($n1+$n2);
elseif ($op == "r")
echo "La suma es: ".($n1-$n2);
elseif ($op == "m")
echo "La suma es: ".($n1*$n2);
elseif ($op == "d")
echo "La suma es: ".($n1/$n2);
else
	echo ".:: Opcion Incorrecta";
 ?>
