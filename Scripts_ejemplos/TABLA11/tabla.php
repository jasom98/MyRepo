<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (isset($_GET['mensaje']))
    $mensaje = $_GET['mensaje'];
else
    $mensaje = '';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <form name="formulario" method="post" action="validar.php">
                    <div>
                        <label for="numero">Numero</label>
                        <input type="text" id="numero" name="numero" placeholder="Ingrese un numero" required/>
                    </div>
                    <div>
                        <input type="submit" value="Ingresar">
                    </div>
        </form>
        <h1><?=$mensaje?></h1> 
        

        </body>
    </html>
