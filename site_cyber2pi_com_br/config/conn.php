<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Fução de conexao com o banco de dados mysql */

$conn = new conn;

class conn{
    
   public function conect($servidor,$usuario,$senha,$bd,$msgs_erro_0) {
        
        define(servidor, $servidor);//Nome do servidor do banco de dados(localhost)
        define(usuario, $usuario);//Nome do usuario do banco de dados
        define(senha, $senha);//Senha do banco de dados
        define(bd, $bd);//Nome do banco de dados
        
        $my_connect = mysqli_connect(servidor, usuario, senha, bd);
        
        if($my_connect){
            return mysqli_connect(servidor, usuario, senha, bd);
        }else{
            echo $msgs_erro_0;
        }
    }
    
}

?>