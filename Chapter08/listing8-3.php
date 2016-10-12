<?php
require_once('PHPUnit/Framework.php');
require_once(dirname(__FILE__). '/../code/Demo.php');

class DemoTest extends PHPUnit_Framework_TestCase {
  public function setUp() {
    $this->demo = new Demo();
  }

  public function testSum() {
    $this->assertEquals(4,$this->demo->sum(2,2));
  }

  public function testSubstract() {
    $this->assertEquals(0,$this->demo->subtract(2,2));
  }

  public function tearDown() {
    unset($this->demo);
  }
}