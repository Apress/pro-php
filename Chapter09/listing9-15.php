//Try to load className.php
if(spl_autoload_call('className')
  && class_exists('className',false)
  ) {

  echo 'className was loaded';

  //Safe to instantiate className
  $instance = new className();
} else {

  //Not safe to instantiate className
  echo 'className was not found';

}