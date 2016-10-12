class DocumentingReflectionClass extends ReflectionClass {

  protected $_comments, $_tags, $_tokens;

  public function __construct($class) {

    parent::__construct($class);

    $docComment = $this->getDocComment();
    $parsedComment = DocumentingReflection::ParseDocComment($docComment);

    $this->_comments = $parsedComment['comments'];
    $this->_tags = $parsedComment['tags'];
    $this->_tokens = $parsedComment['tokens'];

  }

  public function getMethods() {
    $methods = array();

    foreach(parent::getMethods() as $method) {
      $methods[] = new DocumentingReflectionMethod(
                     $this->getName(), $method->getName()
                   );
    }

    return $methods;
  }

  public function printDocTokens() {
    foreach($this->_tokens as $token) {
      echo $token[0] . '=';
      echo docblock_token_name($token[0]) . '=';
      print_r($token[1]);
      echo "\n";
    }
  }

  public function getParsedTags() {
    return $this->_tags;
  }

  public function getParsedComments() {
    return $this->_comments;
  }

}