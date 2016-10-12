<?php
require_once('PHPUnit/Framework.php');
require_once(dirname(__FILE__). '/../code/Demo.php');

class DemoTest extends PHPUnit_Framework_TestCase {
  public function testSum() {
    $demo = new Demo();
    $this->assertEquals(4,$demo->sum(2,2));
    $this->assertNotEquals(3,$demo->sum(1,1));
  }
}