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
 require 'empcredit.inc'; // cannot
 $empcredit=new EmployersCredit();
       $empcredit->Name="Rami Suwayyed";
        $empcredit->CardID="37463746734";
         $empcredit->exp_Date="2015-10-10";
          $empcredit->code=232;
          
          echo "Credit:". $empcredit->CardID;
        ?>
    </body>
</html>
