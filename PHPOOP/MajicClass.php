<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'majicmethos.inc';
        $majic=new MajicClass();
    $majic->Name="Rami";
    $majic->Age=25;
    
    echo   $majic->Name;
    echo '<br/>';
     echo   $majic->Age;
        ?>
    </body>
</html>
