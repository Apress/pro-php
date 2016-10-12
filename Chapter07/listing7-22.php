public function getAttributes() {

  if(array_key_exists('attribute', $this->_tags)) {

    $rawAttributes = $this->_tags['attribute'];
    $attributes = array();

    //If only a single attribute
    if(is_string($rawAttributes)) {
      $rawAttributes = array($rawAttributes);
    }

    foreach($rawAttributes as $attribute) {
      //Parse attribute
      $tmp = explode(' ',$attribute, 2);
      $type = $tmp[0];
      $data = isset($tmp[1])?$tmp[1]:null;

      /*
         Create an attribute class instance by taking
         the attribute name and adding the string
         'Attribute' to the end. Thus an attribute
         WebServiceMethod becomes a class
         WebServiceMethodAttribute
      */
      $rc = new ReflectionClass($type . 'Attribute');
      $instance = $rc->newInstance($data);

      //Associate the ReflectionMethod with the attribute
      $instance->setMethod($this);

      $attributes[] = $instance;
      unset($instance, $rc, $type, $data, $tmp);
    }

    return $attributes;

  }

  //Return an empty array if there are no attributes
  return array();

}