class KeyObject {}

class CollectionObject extends ArrayIterator implements ArrayAccess {

  protected $_keys, $_values;

  public function __construct() {
    $this->_keys = array();
    $this->_values = array();
    parent::__construct(&$this->_values);
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
  }

  public function getKey($hash) {
    return $this->_keys[$hash];
  }

}

$key = new KeyObject();
$collection = new CollectionObject();
$collection[$key] = 'test';

foreach($collection as $k => $v) {
  print_r($collection->getKey($k));
  print_r($v);
}