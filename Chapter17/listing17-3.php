<?php
define('ZFW_VERSION','1.0.2');
define('ZFW_PREFIX','/usr/share/php/ZendFramework');
define('YourPrefix_PREFIX','/usr/share/php/YourPrefix');
define('APP_PATH', realpath(dirname(__FILE__) . '/../'));

$paths = array(
  APP_PATH,
  ZFW_PREFIX . DIRECTORY_SEPARATOR . 'ZendFramework-' . ZFW_VERSION . DIRECTORY_SEPARATOR . 'library',
  YourPrefix_PREFIX . DIRECTORY_SEPARATOR . 'library',
  get_include_path()
);
set_include_path(implode(PATH_SEPARATOR, $paths));

require_once('Zend/Loader.php');
Zend_Loader::registerAutoload();

$tax = YourPrefix_Tax_Calculator::calculate(1);
