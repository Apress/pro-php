class MyArray implements ArrayAccess {

  protected $_arr;

  public function __construct() {
    $this->_arr = array();
  }

  public function offsetSet($offset, $value) {
    $this->_arr[$offset] = $value;
  }

  public function offsetGet($offset) {
    return $this->_arr[$offset];
  }

  public function offsetExists($offset) {
    return array_key_exists($offset, $this->_arr);
  }

  public function offsetUnset($offset) {
    unset($this->_arr[$offset]);
  }

}

$myArray = new MyArray();   // Create an object as an array
$myArray['first'] = 'test'; // offsetSet, set data by key
$demo = $myArray['first'];  // offsetGet, get data by key
unset($myArray['first']);   // offsetUnset, remove key