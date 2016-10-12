require_once('DocumentingReflection.php');

class demo {

  /**
   * This method is for demonstration purposes.
   *
   * It takes a single parameter and returns it.
   *
   * @param mixed $param1 A variable to return.
   * @returns mixed The input variable is returned.
   */
  public function demoMethod($param1) {
    return $param1;
  }

}

$reflector = new DocumentingReflectionMethod('demo', 'demoMethod');
$reflector->printDocTokens();
print_r($reflector->getParsedTags());
print_r($reflector->getParsedComments());