function __autoload($class) {
  require_once($class . '.inc');
}
$test = new SomeClass(); //Calls autoload to find SomeClass