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
   
    function SetCreditCard($credit){
        //check vaild bank
        $this->CreditCard =$credit;       
    }
    function GetCreditCard(){
        //check vaild bank
       return( $this->CreditCard);       
    }
    
     
}
