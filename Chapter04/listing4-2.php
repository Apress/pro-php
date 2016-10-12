class DatabaseException extends Exception {

  protected $databaseErrorMessage;

  public function __construct($message=null, $code = 0) {
    $this->databaseErrorMessage = pg_last_error();
    parent::__construct($message, $code);
  }

  protected function getDatabaseErrorMessage() {
    return $this->databaseErrorMessage;
  }

}