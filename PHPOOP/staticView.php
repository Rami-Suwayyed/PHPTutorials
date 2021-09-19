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
       require 'staticf.inc';
       EmployeeSalary::$rate=7.4;
       //1
       $emp1=new EmployeeSalary();
       $emp1->name="Rami";
       $emp1->salary=1220;
        echo "name:". $emp1->name . "<br/>". $emp1->salary*EmployeeSalary::$rate. "<br/>" ;
      
       //1
       $emp2=new EmployeeSalary();
       $emp2->name="jena";
       $emp2->salary=120;
         echo "name:". $emp2->name . "<br/>". $emp2->salary*EmployeeSalary::$rate . "<br/>";
      
        //1
       $emp3=new EmployeeSalary();
       $emp3->name="salam";
       $emp3->salary=122330;
          echo "name:". $emp3->name . "<br/>". $emp3->salary*EmployeeSalary::$rate ;
      
      
        ?>
    </body>
</html>
