<?php
require_once 'PHPUnit/Framework.php';
require_once 'PHPUnit/TextUI/TestRunner.php';

require_once 'DemoTest.php';

class AllTests {
  public static function main() {
    PHPUnit_TextUI_TestRunner::run(self::suite());
  }

  public static function suite() {
    $suite = new PHPUnit_Framework_TestSuite('Zend Framework - Zend');
    $suite->addTestSuite('DemoTest');
    return $suite;
  }
}