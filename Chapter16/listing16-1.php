$configArray = (
  'domain' => 'some.com',
  'database' => array(
    'name' => 'dbname',
    'password' => 'password'
  )
);
$config = new Zend_Config($configArray);

echo $config->database->name;