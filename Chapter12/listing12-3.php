class Product {

  protected $_partNumber, $_description, $_price;

  public function __construct($partNumber, $description, $price) {
    $this->_partNumber = $partNumber;
    $this->_description = $description;
    $this->_price = $price;
  }

  public function getPartNumber() {
    return $this->_partNumber;
  }

  public function getDescription() {
    return $this->_description;
  }

  public function getPrice() {
    return $this->_price;
  }

}