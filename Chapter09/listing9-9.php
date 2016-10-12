error_reporting(E_ALL); //Ensure notices show

class Base {
  private $baseVar;

  public function __construct() {
    $this->baseVar = 'foo';
  }

}

class Extender extends Base {
  private $extenderVar;

  public function __construct() {
    parent::__construct();
    $this->extenderVar = 'bar';
  }

  public function __sleep() {
    return array('extenderVar', 'baseVar');
  }
}

$instance = new Extender();
$serialized = serialize($instance);
echo $serialized . "\n";
$restored = unserialize($serialized);