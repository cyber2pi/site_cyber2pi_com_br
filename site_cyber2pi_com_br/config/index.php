<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'var_cripto.php';
include 'chave/index.php';
include 'msgs.php';
include 'var.php';
include 'conn.php';

$conn->conect($servidor_cripto,$usuario_cripto,$senha_cripto,$bd_cripto,$msgs->$var_erro[0]);
$cy16->c($chave,$servidor_cripto,$usuario_cripto,$senha_cripto,$bd_cripto,$msgs->$var_erro[1]);
?>