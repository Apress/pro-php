function computeArticles() {
  $articles = array();
  foreach(findPlugins() as $plugin) {
    if($plugin->hasMethod('getArticles')) {
      $reflectionMethod = $plugin->getMethod('getArticles');
      if($reflectionMethod->isStatic()) {
        $items = $reflectionMethod->invoke(null);
      } else {
        $pluginInstance = $plugin->newInstance();
        $items = $reflectionMethod->invoke($pluginInstance);
      }
      $articles = array_merge($articles, $items);
    }
  }
  return $articles;
}

function computeSidebars() {
  $sidebars = array();
  foreach(findPlugins() as $plugin) {
    if($plugin->hasMethod('getSidebars')) {
      $reflectionMethod = $plugin->getMethod('getSidebars');
      if($reflectionMethod->isStatic()) {
        $items = $reflectionMethod->invoke(null);
      } else {
        $pluginInstance = $plugin->newInstance();
        $items = $reflectionMethod->invoke($pluginInstance);
      }
      $sidebars = array_merge($sidebars, $items);
    }
  }
  return $sidebars;
}