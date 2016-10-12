spl_autoload_register(null,false);
spl_autoload_extensions('.php,.inc,.class,.interface');
function myLoader1($class) {
  //Do something to try to load the $class
}
function myLoader2($class) {
  //Maybe load the class from another path
}
spl_autoload_register('myLoader1',false);
spl_autoload_register('myLoader2',false);
$test = new SomeClass();