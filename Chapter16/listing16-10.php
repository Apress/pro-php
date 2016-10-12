//Builds on the Hello: name example
public function indexAction() {

  //Get a reference to Zend_Auth
  $auth = Zend_Auth::getInstance();

  //Check to see if the user is logged in
  if($auth->hasIdentity()) {
    //Get the user's identity and set view variable to name
    $identity = $auth->getIdentity();
    $this->view->name = $identity->name;
  } else {
    //No identity = Welcome: unknown.
    $this->view->name = 'unknown';
  }
}

public function loginAction() {
  if($this->getRequest()->isPost()) {

    //Filter tags from the fields
    $filters = array(
      'email' => 'StringTrim',
      'password' => 'StringTrim'
    );

    $validation = array(
      'email'=>array('emailAddress'),
      'password' => array (
        array('StringLength', 1, 64)
      )
    );

    /*
       Initialize Zend_Filter_Input passing it the
       entire getPost() array
    */
    $zfi = new Zend_Filter_Input($filters, $validation, $this->getRequest()->getPost());

    //If the validators passed, this will be true
    if ($zfi->isValid()) {

      $dbconfig = array(
        'host' => 'localhost',
        'username' => 'user',
        'password' => 'password',
        'dbname' => 'demo'
      );

      $db = Zend_Db::factory('PDO_PGSQL', $dbconfig);

      //Create a new Zend_Auth_Adapter
      $adapter = new Zend_Auth_Adapter_DbTable(
                   $db,
                   'users', //The name of the table
                   'email', //The name of the 'identity' field
                   'password', //The name of the 'credential' field
                   'md5(?)' //SQL function to apply [optional]
                 );

      //Set the identity and credential fields to validated values
      $adapter->setIdentity($zfi->email)
              ->setCredential($zfi->password);

      /*
        Get an instance of Zend_Auth and
        authenticate() using the adapter.
      */
      $auth = Zend_Auth::getInstance();
      $result = $auth->authenticate($adapter);

      //Check for authentication success
      if ($result->isValid()) {

        /*
          The next line stores the entire database row in the users
          Zend_Auth identity. Normally only the 'identity' column 
          in this case, the e-mail is stored as a string. By
          storing the entire record, you can access the user's
          name and ID too.
        */
        $auth->getStorage()->write($adapter->getResultRowObject());

        //Redirect to /index/index when successfully logged in
        $this->getHelper('redirector')->goto('index','index');
      } else {
        //In this case, the authentication failed.
        $this->getHelper('FlashMessenger')
             ->addMessage("The login credentials provided are not valid.");
        $this->getHelper('redirector')->goto('login');
      }
    } else {
      foreach($zfi->getMessages() as $field=>$messages) {
        foreach($messages as $message) {
          $this->getHelper('FlashMessenger')
               ->addMessage($field . ' : '. $message);
        }
      }
      $this->getHelper('redirector')->goto('login');
    }
  }
  $this->view->messages = $this->getHelper('FlashMessenger')->getMessages();
}
