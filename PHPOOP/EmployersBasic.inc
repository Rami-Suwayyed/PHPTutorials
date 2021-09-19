<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EmployersBasic{
    public $Name; //inh
    protected $Age; //inh
     private $CreditCard; //not in
   
     public function SetCreditCard($credit){  ////inh
        //check vaild bank
        $this->CreditCard =$credit;       
    }
  
}