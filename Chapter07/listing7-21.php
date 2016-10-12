require_once('DocumentingReflection.php');

class demo {

  /**
   * This is the first test method
   *
   * @param mixed $param1 The first comment {@link
   * http://www.apress.com See the website}
   * @param string $param2 The second comment.
   */
  public function demoMethod($param1, $param2) {}

  /**
   * This is the second test method
   *
   * @param mixed $param1 The first comment of the second method
   * @param string $param2 The second comment of the second method
   */
  public function demoMethod2($param1, $param2) {}

}

$reflector = new DocumentingReflectionClass('demo');
foreach($reflector->getMethods() as $method) {
  echo $method->getName() . "\n";
  echo print_r($method->getParsedComments(),1);
  foreach($method->getParameters() as $param) {
    echo "\t". $param->getName() . ' ';
    echo $param->getType() . ' ';
    echo $param->getComment();
    echo "\n";
  }
  echo "\n\n";
}