error_reporting(E_ALL);

class Base implements Serializable {
  private $baseVar;

  public function __construct() {
    $this->baseVar = 'foo';
  }

  public function serialize() {
    return serialize($this->baseVar);
  }

  public function unserialize($serialized) {
    $this->baseVar = unserialize($serialized);
  }

  public function printMe() {
    echo $this->baseVar . "\n";
  }
}

class Extender extends Base {
  private $extenderVar;

  public function __construct() {
    parent::__construct();
    $this->extenderVar = 'bar';
  }

  public function serialize() {
    $baseSerialized = parent::serialize();
    return serialize(array($this->extenderVar, $baseSerialized));
  }

  public function unserialize( $serialized ) {
    $temp = unserialize($serialized);
    $this->extenderVar = $temp[0];
    parent::unserialize($temp[1]);
  }
}

$instance = new Extender();
$serialized = serialize($instance);
echo $serialized . "\n";
$restored = unserialize($serialized);
$restored->printMe();