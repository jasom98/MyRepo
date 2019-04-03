<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$numero=0;
$N=$_REQUEST['numero'];
$lista="";

$lista.="<table>";
$lista.="<td>";

for ($i = 1;$i <= 10;$i++) {
    
        $lista.="<tr>".$N.".x".$i."=".$i*$N."</tr>";
        $lista.="<br>";
    }
$lista.="</td>";
$lista.="</table>";

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>            
        <form name="formulario" method="post" >
                    <div>
                        <label for="numero">Usuario</label>
                        <input type="text" id="numero" name="numero" placeholder="Ingrese Su Usuario" required/>
                    </div>
                    <div>
                        <input type="submit" value="Ingresar">
                    </div>
        </form>
        <table>
        <tr><td><?=$lista?></td></tr> 
        </table>
        </body>
    </html>
