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
        require 'inhertinace.inc';
        $emp1=new EmployersIn();
        $emp1->Name="Rami";
        $emp1->Age=26;
        $emp1->Models="BMW";
        $emp1->Year=2015;
        echo print_r($emp1->Getowners());
        ?>
    </body>
</html>
