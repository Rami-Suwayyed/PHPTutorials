<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.checktypesin.inc
 */

require 'EmployersBasic.inc'; 
class EmployersBasicInfo extends EmployersBasic {
    
    public $DateLeave;
    
    function GetAge(){
        return $this->Age;
    }
     function SetAge($age){
     $this->Age=$age;
    }
}