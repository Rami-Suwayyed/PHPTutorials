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
        /*
        require 'EmployersBasic.inc';
        $basEmp=new EmployersBasic();
        $basEmp->Name= "Rami 1";
        echo $basEmp->Name;
         * */
   
        require 'EmployersBasicInfo.inc';
        $basemps=new EmployersBasicInfo();
        $basemps->DateLeave="2015-10-10";
        $basemps->Name="Rami 2";
        $basemps->SetAge(22);
        echo   $basemps->GetAge();
         echo  "<br/>";
         echo $basemps->Name;
        ?>
    </body>
</html>
