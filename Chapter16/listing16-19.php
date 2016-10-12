$transport = new Zend_Mail_Transport_Smtp(
  'mail.domain.com',
    array(
      'auth' => 'login',
      'username' => 'myusername',
      'password' => 'password'
    )
);