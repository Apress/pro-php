if(false === spl_autoload_functions()) {
  if(function_exists('__autoload')) {
    spl_autoload_register('__autoload',false);
  }
}
//Continue to register autoload functions