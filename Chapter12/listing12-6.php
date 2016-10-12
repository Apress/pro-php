$cart = new Cart();
$cart[] = new Product('00231-A', 'A', 1.99);
$cart[] = new Product('00231-B', 'B', 1.99);

echo $cart->getCartTotal();