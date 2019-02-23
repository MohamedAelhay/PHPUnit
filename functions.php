<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 18/02/19
 * Time: 13:13
 */

function getFactorial($number){
    if(!is_integer($number) || $number < 0){
        return Null;
    } else {
        if($number < 2) {
            return 1;
        } else {
            $result = 1;
            for ( $i = 1; $i <= $number; $i++){
                $result = $result * $i;
            }
            return $result;
        }
    }
}


