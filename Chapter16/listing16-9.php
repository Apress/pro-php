$cacheFrontendOptions = array(
  'debug_header' => true,
  'regexps' => array(
    '^/$' => array(
      'cache_with_get_variables' => true,
      'make_id_with_get_variables' => true
    )
  )
);