<?php
//Generrar lista de numeros del 1-10
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
?>