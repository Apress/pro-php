<?PHP

abstract class Attribute {

  protected $method;

  function setMethod(ReflectionMethod $method) {
    $this->method = $method;
  }

  function getMethod() {
    return $this->method;
  }

}

class WebServiceMethodAttribute extends Attribute {

  protected $data;

  function __construct($data) {
    $this->data = $data;
  }

  function getData() {
    return $this->data;
  }

}
