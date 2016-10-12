class YourPrefix_Controller_Plugin_Security extends Zend_Controller_Plugin_Abstract {

  protected $_acl;

  //Take the bootstrapped ACL at plugin registration
  public function __construct($acl) {
    $this->_acl = $acl;
  }

  //Hook into the dispatchLoopStartup event
  public function dispatchLoopStartup($request) {

    //Get an instance of Zend_Auth and set the default role to guest.
    $auth = Zend_Auth::getInstance();
    $role = 'guest';

    //If the user is logged in, get their role identifier from db row
    if($auth->hasIdentity()) {
      $role = $auth->getIdentity()->role;
    }

    //The resource name is the controller name
    $resource = $request->getControllerName();

    //If the controller isn't under ACL, ignore access control
    if($this->_acl->has($resource)) {

      //Check role has access to resource
      if( ! $this->_acl->isAllowed($role, $resource) ) {
        //No access

        //Back up the original request URI
        $session = new Zend_Session_Namespace('ACLSecurity');
        $session->originalRequestUri = $request->getRequestUri();

        //Overwrite the controller and action that the dispatch will use
        $request->setControllerName('index');
        $request->setActionName('login');
      }
      // else { access is ok, dispatch normally }
    }
  }
}
