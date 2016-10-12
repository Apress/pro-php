class DocumentingReflectionParameter extends ReflectionParameter {
  protected $_reflectionMethod, $_reflectionClass, $_comment, $_type;

  public function __construct($method, $parameter) {
    parent::__construct($method, $parameter);

    $this->_comment = '';
    $this->_type = 'undefined';

    $this->_reflectionMethod =
              new DocumentingReflectionMethod($method[0], $method[1]);

    $tags = $this->_reflectionMethod->getParsedTags();

    if(array_key_exists('param', $tags)) {
      $params = $tags['param'];

      if(is_array($params)) {
        foreach($params as $param) {
          if($this->_isParamTag($this->getName(), $param)) {
            $paramFound = $param;
          }
        }
      } else {
        if($this->_isParamTag($this->getName(), $params)) {
          $paramFound = $params;
        }
      }
      if(isset($paramFound)) {
        $tokens = preg_split("/[\s\t]+/", $paramFound, 3);
        $this->_comment = $tokens[2];
        $this->_type = $tokens[0];
      }
    }
  }

  public function getDeclaringFunction() {
    return $this->_reflectionMethod;
  }

  public function getComment() {
    return $this->_comment;
  }

  public function getType() {
    return $this->_type;
  }

  private function _isParamTag($paramName, $paramData) {
    $paramSplit = preg_split("/[\s\t]+/", $paramData, 3);
    $explodedName = trim($paramSplit[1], ' $,.');
    if($explodedName == $paramName) {
      return true;
    } else {
      return false;
    }
  }

}