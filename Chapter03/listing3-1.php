class Database {

  private $_db;
  static $_instance;

  private function __construct() {
    $this->_db = pg_connect('dbname=example_db');
  }

  private __clone() {};

  public static function getInstance() {
    if( ! (self::$_instance instanceof self) ) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  public function query($sql) {
    //Run a query using $this->_db
    return pg_query($this->_db,$sql);
  }

}