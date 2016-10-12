class YourPrefix_Controller_Plugin_Statistics extends Zend_Controller_Plugin_Abstract {
  public function routeStartup($request) {
    $uri = $request->getRequestUri();

    $dbconfig = array(
        'host' => 'localhost',
        'username' => 'user',
        'password' => 'password',
        'dbname' => 'demo'
    );

    $db = Zend_Db::factory('PDO_PGSQL', $dbconfig);

    $data = array(
      'uri' => $uri
    );

    $db->insert('stats', $data);

  }
}