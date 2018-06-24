<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'msgs.php';
include 'var.php';
include 'conn.php';

$conn->conect($servidor, $usuario, $senha, $bd, $msgs->$var_erro[0]);

?>