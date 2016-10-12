$validation = array(
  'name' => array (
    array('StringLength', 1, 64),
    Zend_Filter_Input::MESSAGES => array(
      array(
        Zend_Validate_StringLength::TOO_SHORT => 'Name cannot be blank',
        Zend_Validate_StringLength::TOO_LONG => 'Name field is too long'
      )
    )
  )
);