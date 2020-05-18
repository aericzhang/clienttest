<?php
/*
 * @Descripttion: 
 * @Author: zhangwei
 * @Date: 2020-05-18 22:55:30
 */ 
require_once realpath('../').'/vendor/autoload.php';
require_once realpath('../').'/MyGreeter/Client.php';

class MyGreeter_Client_Test extends PHPUnit_Framework_TestCase
{
    private $greeter;

    public function setUp()
    {
        $this->greeter = new Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}

$unit = new MyGreeter_Client_Test();
$unit->setUp();
$testInstance = $unit->test_Instance();
$testGetGreeting = $unit->test_getGreeting();
exit();
