<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 18/02/19
 * Time: 13:25
 */

class SimpleUnit extends PHPUnit\Framework\TestCase
{
    protected $user;
    protected $user2;


    public function test_getFactorial_check_return_value_general(){
        $this->assertEquals(getFactorial(5), 120);
    }

    public function test_getFactorial_check_return_value_of_0_or_1(){
        $this->assertEquals(getFactorial(0), 1);
    }

    public function test_getFactorial_check_integer_numbers(){
        $this->assertTrue(getFactorial("Mohamed") == Null);
    }

    public function test_getFactorial_check_negative_numbers(){
        $this->assertTrue(getFactorial(-5) == Null);
    }

    public function setUp() : void {
        $this->user = new User("Mohamed", "a@b.com");
        $this->user2= new User();
    }

    public function test_check_name_from_constructor(){
        $this->assertEquals($this->user->name, "Mohamed");
    }

    public function test_check_name_from_constructor_def(){
        $this->assertEquals($this->user2->name, Null);
    }

//    public function teardown(){
//        $this->user->delete();
//    }
}