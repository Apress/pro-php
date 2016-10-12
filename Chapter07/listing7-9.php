/**
  * This is a doccomment
  *
  * This doccomment documents the class demo
  */
class demo {}

$reflectionClass = new ReflectionClass('demo');
$docComment = $reflectionClass->getDocComment();

print($docComment);