$acl = new Zend_Acl();

//Create guest role
$acl->addRole(new Zend_Acl_Role('guest'));

//Create members role, inheriting guest
$acl->addRole(new Zend_Acl_Role('member'), 'guest');

//Add a resource for the index controller
$acl->add(new Zend_Acl_Resource('index'));

//Add a resource for the articles controller
$acl->add(new Zend_Acl_Resource('articles'));

//Allow guest access to the index controller
$acl->allow('guest', 'index');

//Deny guest article access, but allow members
$acl->deny('guest', 'articles');
$acl->allow('member', 'articles');