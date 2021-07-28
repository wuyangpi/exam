<?php
use \MyGreeter\Client;

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public $greeter;
    
    /**
     * 20210728
     * @param \MyGreeter\Client $greeter
     */
    public function __construct(\MyGreeter\Client $greeter)
    {
        $this->greeter = $greeter;
    }
    
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}

