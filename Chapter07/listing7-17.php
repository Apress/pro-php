public function getParameters() {
  $parameters = array();

  if(is_object($this->_declaringClass)) {
    $class = get_class($this->_declaringClass);
  } else if(is_string($this->_declaringClass)) {
    $class = $this->_declaringClass;
  }

  foreach(parent::getParameters() as $parameter) {
    $parameters[] = new DocumentingReflectionParameter(
                    array($class, $this->getName()),
                    $parameter->getName()
                  );
  }

  return $parameters;
}