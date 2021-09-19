<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Employers{
    public $Name;
    public $Age;
    public $DateBirth;
    private $CreditCard;
   
    function __construct($name,$age,$datebirth) {
        $this->Name=$name;
        $this->Age=$age;
        $this->DateBirth=$datebirth;
    }
    
    /*
     * function __construct( ) {
         echo 'clas is created';
    }
     */
     
     
}