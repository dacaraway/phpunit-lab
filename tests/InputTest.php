<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 3/9/14
 * Time: 9:41 PM
 */


require_once __DIR__ . '/../classes/Input.php';

class InputTest extends PHPUnit_Framework_TestCase {


    public function tearDown(){
        if(isset($_GET)) {unset($_GET);}
    }


    public function test_input(){

        $_GET['email'] = 'dtang@usc.edu';
        $this->assertEquals(Input::get('email'),'dtang@usc.edu');

    }

    public function test_input_fail(){
        $this->assertNull(Input::get('email'));

        $this-> assertEquals(Input::get('plan', 'standard'), 'standard');
    }

}
