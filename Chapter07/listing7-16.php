require_once('DocumentingReflection.php');

class demo {

  /**
   * @param string $param this is the comment
   */
  public function demoMethod($param='test') {}

}

$refparam = new DocumentingReflectionParameter(
              array('demo', 'demoMethod'),
              'param'
            );

var_dump($refparam->getComment());
var_dump($refparam->getType());