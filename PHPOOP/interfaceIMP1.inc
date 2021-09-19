<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'interface.inc';
class YearSalary implements operations{
    
    public function div($var1, $var2) {
        return $var1/ $var2;
    }

    public function mul($var1, $var2) {
              return $var1* $var2;  
    }

    public function sub($var1, $var2) {
              return $var1- $var2;  
    }

    public function sum($var1, $var2) {
               return $var1+ $var2; 
    }

}