<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MajicClass{
   
    private $Name;
    private $Age;
    private $DateBirth;
    private $CreditCard;
    
    
    function __set($name, $value) {
        switch ($name){
            case 'Name':  
                $this->Name=$value;
                break;
              case 'Age':  
                $this->Age=$value;
                break;
              case 'DateBirth':  
                $this->DateBirth=$value;
                break;
              case 'CreditCard':  
                $this->CreditCard=$value;
                break;
        }
        return $value;
    }
    
    function __get($name) {
     switch ($name){
            case 'Name':  
               return $this->Name ;
            
              case 'Age':  
               return $this->Age ;
            
              case 'DateBirth':  
               return $this->DateBirth ;
            
              case 'CreditCard':  
              return  $this->CreditCard ;
            
        }
    }
}