$route = new Zend_Controller_Router_Route(
  '/product/view/:productId, array(
    'controller' => 'product',
    'action' => 'view',
    'productId' => false
  )
);
$router->addRoute('viewproduct', $route);