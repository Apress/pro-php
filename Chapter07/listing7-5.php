function computeMenu() {
  $menu = array();
  foreach(findPlugins() as $plugin) {
    if($plugin->hasMethod('getMenuItems')) {
      $reflectionMethod = $plugin->getMethod('getMenuItems');
      if($reflectionMethod->isStatic()) {
        $items = $reflectionMethod->invoke(null);
      } else {
        //If the method isn't static we need an instance
        $pluginInstance = $plugin->newInstance();
        $items = $reflectionMethod->invoke($pluginInstance);
      }
      $menu = array_merge($menu, $items);
    }
  }
  return $menu;
}