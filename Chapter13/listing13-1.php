class Lazy {
  protected $_loaded = false;
  protected $_name;

  public function materialize() {
    $this->_loaded = true;
    $this->_name = 'Kevin';
  }

  public function getName() {
    if(!$this->_loaded) {
      throw new LogicException('Call materialize() before accessing');
    }
    return $this->_name;
  }
}

$lazy = new Lazy();
echo $lazy->getName();