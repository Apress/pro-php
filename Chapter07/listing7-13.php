class DocumentingReflectionMethod extends ReflectionMethod {

  protected $_comments, $_tags, $_tokens, $_declaringClass;

  public function __construct($object, $method) {
    parent::__construct($object, $method);

    $docComment = $this->getDocComment();
    $this->_declaringClass = $object;

    $parsedComment = DocumentingReflection::ParseDocComment($docComment);

    $this->_comments = $parsedComment['comments'];
    $this->_tags = $parsedComment['tags'];
    $this->_tokens = $parsedComment['tokens'];

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