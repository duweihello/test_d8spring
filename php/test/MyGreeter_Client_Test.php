<?php

error_reporting(error_reporting() & ~E_USER_DEPRECATED);
require_once(__DIR__ . '/../vendor/autoload.php');

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase {

    public function setUp() {
        date_default_timezone_set('Etc/GMT+8');
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance() {
        $this->assertEquals(
                get_class($this->greeter), 'MyGreeter\Client'
        );
    }

    public function test_getGreeting() {
        $h = intval(date('G'));
        if ($h >= 0 && $h < 12) {
            $this->assertEquals(
                    $this->greeter->getGreeting(), 'Good morning'
            );
        } elseif ($h >= 12 && $h < 18) {
            $this->assertEquals(
                    $this->greeter->getGreeting(), 'Good afternoon'
            );
            $greeting = 'Good afternoon';
        } elseif ($h >= 18 && $h < 24) {
            $this->assertEquals(
                    $this->greeter->getGreeting(), 'Good evening'
            );
        }
    }

}
