require_once('DocumentingReflection.php');

class demo {

  /**
   * @param mixed $param1 The first comment.
   * @param string $param2 The second comment.
   */
  public function demoMethod($param1, $param2) {}

}

$reflector = new DocumentingReflectionMethod('demo', 'demoMethod');
foreach($reflector->getParameters() as $param) {
  echo $param->getName() . ' ';
  echo $param->getType() . ' ';
  echo $param->getComment();
  echo "\n";
}