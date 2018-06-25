<?php
        
$cy16 = new cy16;

class cy16{
    public function c($chave_16, $val1, $val2, $val3, $val4, $msgs_erro_1){
        if(is_string($chave)){
            if(strlen($chave) == 16){
                $a_chave = str_split($chave);
                $chave_str_pos = strpos($chave, "0");
                if($chave_str_pos === false){
                    $a_c = 0;
                    while($a_c < 16){
                        if((int)$a_chave[$a_c] / 2 == 0){
                            echo "{$a_chave[$a_c]} é uma String<br>";
                        }else{
                            echo "{$a_chave[$a_c]} não é uma String<br>";
                        }
                    $a_c++;
                    }
                }else{
                    echo $msgs_erro_1;
                }
            }else{
                echo $msgs_erro_1; 
            }
        }else{
            echo $msgs_erro_1;
        }
    }
    public function d($chave_16, $val1, $val2, $val3, $val4){
    }
}

?>
