require_once('Product.php');

class Cart extends ArrayObject {

  protected $_products;

  public function __construct() {
        $this->_products = array();

        /*
           Construct the underlying ArrayObject using
           $this->_products as the foundation array. This
           is important to ensure that the features
           of ArrayObject are available to your object.
        */
        parent::__construct($this->_products);
  }

}

$cart = new Cart();
$product = new Product('00231-A', 'Description', 1.99);

$cart[] = $product;

print_r($cart);