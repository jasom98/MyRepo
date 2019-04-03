<?php
//Generar lista de numeros del 1-10
// script con while, For y Do While
echo "Punto Numero 1";
echo "<br> 1";
echo "<br> 2";
echo "<br> 3";
echo "<br> 4";
echo "<br> 5";
echo "<br> 6";
echo "<br> 7";
echo "<br> 8";
echo "<br> 9";
echo "<br> 10";


echo "<br><br>Punto Numero 2";
echo"<br><b>Lista de numeros con While</b>";
echo "<table border =1 >";
$i=1;
echo "<tr>";
while ($i <= 10)
{
	if (($i%2) == 0){
	echo "<td bgcolor='yellow'>".$i."</td>";	
	}else{
		echo "<td bgcolor='red'>".$i."</td>";
		}
		$i++; //$i=$i+1
}
echo "</tr>";
echo "</table>";

echo "<br><br> Punto Numero 3<br>";
echo "<table border =1 >";
for($i=1; $i <= 100; $i++) {
    if (($i%2) == 0){
	echo "<td bgcolor='yellow'>".$i."</td>";	
	}else{
		echo "<td bgcolor='red'>".$i."</td>";
		}
}
echo "</tr>";

echo "</table>";
echo "<br><br> Punto Numero 4<br>";
echo "<table border =1 >";
$i=1;
echo "<tr>";
while ($i <= 100)
{
	echo "<td>".$i."</td>";	
	$i=$i+2;
}
echo "</tr>";
echo "</table>";

echo "<br><br> Punto Numero 5<br>";
echo "<table border =1 >";
echo "<tr>";
$v = array();
$max_num = 10;
for ($x=0;$x<$max_num;$x++) {
  $num_aleatorio = rand(1,100);
  array_push($v,$num_aleatorio);
}
// mostrar los numeros
for ($x=0;$x<count($v);$x++)
  echo "<td>".$v[$x]."</td>";
echo "</tr>";
echo "</table>";

echo "<br><br> Punto Numero 6<br>";
echo "<table border =1 >";
$i=1;
$suma=0;
echo "<tr>";
while ($i <=100) {
      $suma = $suma + $i;
		$i = $i + 1;
}
echo "<td>".$suma."</td>";
echo "</tr>";
echo "</table>";

echo "<br><br> Punto Numero 7<br>";
echo "<table border =1 >";
$i=1;
$suma=0;
echo "<tr>";
while ($i <= 100)
{
	if (($i%3) == 0){
	echo "<td>".$i."</td>";
		}
	$i++;
}

echo "</tr>";
echo "</table>";
/*
echo "<br><br> Punto Numero 8<br>";
echo "<table border = 3 >";
echo "<tr>";
$va = array();
$max_num = 10;
for ($x=0;$x<$max_num;$x++) {
  $num_aleatorio = rand(1,1000);
  array_push($va,$num_aleatorio);
}
echo "</tr>";
// mostrar los numeros
echo "<tr>";
echo"<br> Numeros Aleatorios<br>";
for ($x=1;$x<count($va);$x++){
		echo "<td>".$va[$x]."</td>";
}
echo "</tr>";
echo "<tr>";
echo"<br> Numeros pares<br>";
for ($x=1;$x<count($va);$x++){	
	if(($x%2)==0){
	echo "<td>".$va[$x]."</td>";
	}
}
echo "</tr>";
echo "<tr>";
echo"<br><br> Numeros Impares<br>";
for ($x=1;$x<count($va);$x++){	
	if(($x%2)!=0){
	echo "<td>".$va[$x]."</td>";
	}
}
echo "</tr>";
echo "</table>";
*/


echo "<br><br> Punto Numero 8<br>";
$t= 1;
		$acumulador1=0;
		$acumulador2=0;
		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($t<=10){
			$tt=rand(1,100);
			echo $tt."&nbsp;&nbsp;";
			if($tt%2==0){
				$acumulador1++;				
			}else {
				$acumulador2++;				
			}
			$t++;
		}
		echo "</table>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares:</td><td>". $acumulador1 ."</td></tr>";
		echo "<tr><td>Total de impares:</td><td>". $acumulador2 ."</td></tr>";
		echo "</table>";
		
echo "<br><br> Punto Numero 9<br>";
		$n= 1;
		$acumulador3=0;
		$acumulador4=0;
		$acumulador5=0;
		$acumulador6=0;
		echo "<br>Números: ";
		echo "<table border = '3' cellpadding='4'><br>";
		while($n<=10){
			$nn=rand(-100,100);
			echo $nn."&nbsp;&nbsp;";
			if($nn%2==0){
				if($nn>=0){
				$acumulador3++;
				}else{
					$acumulador5++;
					}				
			}else {
				if($nn>=0){
				$acumulador4++;
				}else{
					$acumulador6++;
					}	
			}
			$n++;
		}
		echo "</table>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares positivos:</td><td>". $acumulador3 ."</td></tr>";
		echo "<tr><td>Total de impares positivos:</td><td>". $acumulador4 ."</td></tr>";
		echo "<tr><td>Total de pares negativos:</td><td>". $acumulador5 ."</td></tr>";
		echo "<tr><td>Total de impares negativos:</td><td>". $acumulador6 ."</td></tr>";
		echo "</table>";
?>