interface IDatabaseBindings {

  public function userExists($email);

}

class PGSQL implements IDatabaseBindings {

  protected $_connection;

  public function __construct() {
    $this->_connection = pg_connect('dbname=example_db');
  }

  public function userExists($email) {
    $emailEscaped = pg_escape_string($email);
    $query = "select 1 from users where email = '". $emailEscaped ."'";
    if($result = pg_query($query, $this->_connecion)) {
      return (pg_num_rows($result) > 0)?true:false;
    } else {
      return false;
    }
  }

}

class MYSQL implements IDatabaseBindings {

  protected $_connection;

  public function __construct() {
    $this->_connection = mysql_connect('localhost');
    mysql_select_db('example_db', $this->_connection);
  }

  public function userExists($email) {
    $emailEscaped = mysql_real_escape_string($email);
    $query = "select 1 from users where email = '". $emailEscaped ."'";
    if($result = mysql_query($query, $this->_connecion)) {
      return (mysql_num_rows($result) > 0)?true:false;
    } else {
      return false;
    }
  }

}

class DatabaseFactory {

  public static function factory() {
    $type = loadtypefromconfigfile();
    switch($type) {
      case 'PGSQL':
        return new PGSQL();
        break;
      case 'MYSQL';
        return new MYSQL();
        break;
    }
  }

}

//--- Usage ---

$db = DatabaseFactory::factory();
$db->userExists('person@example.com');