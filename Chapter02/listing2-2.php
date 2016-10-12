class MyObject {

  public static $myStaticVar=0;

  function myMethod() {
    self::$myStaticVar += 2;
    echo self::$myStaticVar . "\n";
  }

}
$instance1 = new MyObject();
$instance1->myMethod();
$instance2 = new MyObject();
$instance2->myMethod();