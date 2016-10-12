$route1 = new Zend_Controller_Router_Route(
  '/product/view/:productId',
  array(
    'controller'=>'product',
    'action'=>'viewById'
  ),
  array(
    'name' => '/[0-9]+/';
  )
);