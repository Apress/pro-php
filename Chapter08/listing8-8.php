<?php
class MyClass {
  public function myCaller($other) {
    $other->myCallee();
  }
}

class MyOther {
  public function myCallee() {
    printf("%s", xdebug_call_class());
    printf("::%s", xdebug_call_function());
    printf(" in %s", xdebug_call_file());
    printf(":%s\n", xdebug_call_line());
  }
}

$a = new MyClass();
$b = new MyOther();

$a->myCaller($b);