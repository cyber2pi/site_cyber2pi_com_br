<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$msgs = new msgs;

class msgs{
    
    public $var_erro = array();
    public $var_acerto = array();
    public $var_atencao = array();
    
    public function erro($var_erro){
       echo "<span style=\"color: red;\">{$val_erro}</span>"; 
    }
    
    public function acerto($var_acerto){
       echo "<span style=\"color: green;\">{$var_acerto}</span>"; 
    }
    
    public function atencao($var_atencao){
       echo "<span style=\"color: yellow;\">{$var_atencao}</span>"; 
    }
    
}

?>
