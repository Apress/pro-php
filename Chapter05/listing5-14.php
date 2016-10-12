<?php
class MyClass {
  public static function __callStatic($name, $parameters) {
    echo $name .' method called. Parameters: '. PHP_EOL .
         var_export($parameters, true) . PHP_EOL;
  }
}

MyClass::bogus(1, false, 'a');