<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 18/02/19
 * Time: 13:13
 */

function getFactorial($num){
    if(is_integer($num)){
        if($num == 0 || $num == 1){
            return 1;
        } elseif ($num < 0){
            return Null;
        } else {
            $result = 1;
            for ( $i = 1; $i <= $num; $i++){
                $result = $result * $i;
            }
            return $result;
        }
    } else {
        return Null;
    }
}

