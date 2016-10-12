class userClass {
  public function userMethod($userParameter='default') {}
}

foreach(get_declared_classes() as $class) {
  $reflectionClass = new ReflectionClass($class);
  if($reflectionClass->isUserDefined()) {
    Reflection::export($reflectionClass);
  }
}