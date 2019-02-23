<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 18/02/19
 * Time: 14:28
 */

class User
{
    public $name;
    public $email;

    public function __construct($name = FALSE, $email = FALSE)
    {
        if(!$name){
            $this->name = Null;
        } else {
            $this->name = $name;
        }

        if(!$email){
            $this->email = Null;
        } else {
            $this->email = $email;
        }
    }
}