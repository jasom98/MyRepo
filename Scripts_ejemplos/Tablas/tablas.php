<html><!--mi comentario -->
    <head>
          <title>TABLAS</title>
          <link rel="icon" type="image/ico" href="icons/logo.png">
    </head>
    <body bgcolor="#FAF9F9">

     <br><br>
<form name="form1" action="tablas.php" method="POST">
    <center>

      <table border="0" align="center" color="red">
          <center><p>TABLAS</center>
          <tr>
            <td align="left"><font face="Times new Roman" size="3" color="#0E0000">Digite un numero
              <font face="Times new Roman" size="3" color="#FF0000">*
             </td>

            <td><input type="number" name="num1" border="1" placeholder="Numero " required></td>
          </tr>
	   <td colspan="2" align ="center"><br> <center><input type ="submit" value="CALCULAR"></center> </td>
    </table>

  </form>

    </body>
</html>

<?php
//Generar lista de numeros del 1 al 10
//Script con while. for, do-while
$n1=$_POST['num1'];
echo "<table border=1  >";
echo "<br>Tablas Horizontal Por Separado<br>";
$i=1;
while ($i <= $n1) {
  if ($i%2==0){
   echo "<td bgcolor='gray'>". $i ."</td>";
  }else{
    echo "<td bgcolor='RED'>". $i ."</td>";
  }
  $i++;//$i=$i+1
}
echo"</table><br>";
echo "<table border=1  >";

$i=$n1;
while ($i >0 ) {
  if ($i%2==0){
    echo "<td bgcolor='gray'>". $i ."</td>";
  }else{
    echo "<td bgcolor='RED'>". $i ."</td>";
  }
  $i--;//$i=$i+1
}
echo"</table><br>";
echo "Tablas Unidas Vertical";
echo "<table  width=1% cellpadding=1 cellspacing=3 align=center  border=1>";
echo "<tr>";
echo "<td width=60% >";
echo "<table border=1>";
$i=1;
while ($i <= $n1) {
   if ($i%2==0){
    echo "<tr>";
    echo "<td bgcolor='gray'>". $i ."     </td>";
    echo "</tr>"; 
  }else{
    echo "<td bgcolor='RED'>". $i ."</td>";
  }
   $i++;//$i=$i+1
  echo "</tr>";
};

echo"</table>";
echo"</td>";
echo "<td width=60% >";
echo "<table  border=1>";
$i=$n1;
while ($i >0 ) {
  echo "<tr>";
    if ($i%2==0){
       echo "<td bgcolor='gray'>". $i ."     </td>";
      }else{
    echo "<td bgcolor='RED'>". $i ."</td>";
      }
  $i--;//$i=$i+1
  echo "</tr>";  
}
echo"</table>";
echo"</td>";
echo"</tr>";
echo"</table>";



 ?>
