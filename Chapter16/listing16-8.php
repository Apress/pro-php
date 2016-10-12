$cacheBackendOptions = array(
  'cache_dir' => APP_PATH . '/cache'
);

$cacheFrontendOptions = array(
  'regexps' => array(
    '^/$' => array() //use default caching options on front page
  )
);

$cache = Zend_Cache::factory(
                             'Page', //Use the page frontend
                             'File', //Use the file backend
                             $cacheFrontendOptions,
                             $cacheBackendOptions
         );
$cache->start();
