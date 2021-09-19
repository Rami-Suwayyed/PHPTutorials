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
        require 'employeecons.inc';
        // put your code here
        $emp1=new Employers("Rami",25,"2015-10-10");
        
        echo $emp1->Name;
        ?>
    </body>
</html>
