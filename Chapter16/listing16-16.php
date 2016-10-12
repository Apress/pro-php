$route2 = new Zend_Controller_Router_Route(
  '/product/view/:name',
  array(
    'controller'=>'product',
    'action'=>'viewByName',
    'name'=>false
  ),
);