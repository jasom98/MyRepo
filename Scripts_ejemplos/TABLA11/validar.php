<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$varios = $_POST['numero'];
$resta=1;
$lista="";
$lista="<table border=1>";
for ($i = 2; $i <= $varios; $i++) {
    $operacion=$i-$resta;
    $lista .= "$operacion";
    $mensaje = "<td><tr>$lista.$varios</tr></td>";
}
$lista="</table>";

header("Location: index.php?mensaje=$mensaje");



