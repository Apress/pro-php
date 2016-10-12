<?php
define('ZFW_VERSION','1.0.3');
define('ZFW_PREFIX','/usr/share/php/ZendFramework');
define('APP_PATH', realpath(dirname(__FILE__) . '/../'));

$paths = array(
  APP_PATH,
  APP_PATH . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR . 'models',
  ZFW_PREFIX . DIRECTORY_SEPARATOR . 'ZendFramework-'. ZFW_VERSION . DIRECTORY_SEPARATOR. 'library',
  get_include_path()
);

set_include_path(implode(PATH_SEPARATOR, $paths));

require_once('Zend/Loader.php');

Zend_Loader::registerAutoload();

$front = Zend_Controller_Front::getInstance();
$front->throwExceptions(true);
$front->run(APP_PATH . '/application/controllers');
