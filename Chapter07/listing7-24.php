<?php

require_once('DocumentingReflection.php');
require_once('Attributes.php');

class demo {

  /**
   * Add two numbers together
   *
   * @param int $a The first number to add
   * @param int $b The second number to add
   * @attribute WebServiceMethod Some Extra Info
   */
  public function add($a, $b) { return $a+$b; }

  /**
   * Divide two numbers
   *
   * @param int $a The value
   * @param int $b The divisor
   */
  public function divide($a, $b) { return $a+$b; }

}

$reflector = new DocumentingReflectionClass('demo');
foreach($reflector->getMethods() as $method) {
  foreach($method->getAttributes() as $attribute) {
    if($attribute InstanceOf WebServiceMethodAttribute) {
      //If the code gets here, this method is safe to expose

      //Get the class name
      $class = $attribute->getMethod()->getDeclaringClass()->getName();

      //Get the method name
      $method = $attribute->getMethod()->getName();

      //Get any data passed to the right of the attribute name
      $data = $attribute->getData();

      //Add the method to your web service (not included)
      //$service->add(array($class, $method));
    }
  }
}