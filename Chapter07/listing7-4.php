function findPlugins() {
  $plugins = array();
  foreach(get_declared_classes() as $class) {
    $reflectionClass = new ReflectionClass($class);
    if($reflectionClass->implementsInterface('IPlugin')) {
      $plugins[] = $reflectionClass;
    }
  }
  return $plugins;
}