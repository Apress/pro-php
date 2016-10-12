/**
 * This is a doccomment
 *
 * This doccomment documents the class demo
 */
class demo {}

$reflectionClass = new ReflectionClass('demo');
$docComment = $reflectionClass->getDocComment();

$tokens = docblock_tokenize($docComment,true);

foreach($tokens as $token) {
  echo $token[0] . '=';
  echo docblock_token_name($token[0]) . '=';
  print_r($token[1]);
  echo "\n";
}