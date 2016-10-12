$params = array (
    'username' => 'demouser',
    'password' => 'demopass',
    'dbname' => 'demodb'
);

$db = Zend_Db::factory('PDO_PGSQL', $params);

Zend_Db_Table::setDefaultAdapter($db);