<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'interface.inc';
class MonthSalary implements operations{
    public $Rate=3.5;
    public function div($var1, $var2) {
            return $var1/ $var2*$Rate;
    }

    public function mul($var1, $var2) {
           return $var1* $var2*$Rate; 
    }

    public function sub($var1, $var2) {
          return $var1- $var2*$Rate;  
    }

    public function sum($var1, $var2) {
          return $var1+$var2*$Rate;  
    }

}