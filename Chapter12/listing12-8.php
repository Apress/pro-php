class KeyObject {}

class CollectionObject implements ArrayAccess {

  protected $_keys, $_values;

  public function __construct() {
    $this->_keys = array();
    $this->_values = array();
  }

  public function offsetSet($key, $value) {
    $this->_keys[spl_object_hash($key)] = $key;
    $this->_values[spl_object_hash($key)] = $value;
  }

  public function offsetGet($key) {
    return $this->_values[spl_object_hash($key)];
  }

  public function offsetExists($key) {
    return array_key_exists(spl_object_hash($key), $this->_values);
  }

  public function offsetUnset($key) {
    unset($this->_values[spl_object_hash($key)]);
    unset($this->_keys[spl_object_hash($key)]);
  }

}

$key = new KeyObject();
$collection = new CollectionObject();
$collection[$key] = 'test';

echo $collection[$key];