class DatabaseException extends Exception {

  const ConnectionFailed = 1;
  const LoginFailed = 2;
  const PermissionDenied = 3;

  public function __construct($code=0) {

    switch ($code) {
      case DatabaseException::ConnectionFailed:
        $message = 'Database connection failed';
        break;
      case DatabaseException::LoginFailed:
        $message = 'Login to the database was rejected';
        break;
      case DatabaseException::PermissionDenied:
        $message = 'Permission denied';
        break;
      default:
        $message = 'Unknown Error';
    }

    parent::__construct($message, $code);

  }

}

try {
  if( ! $conn = pg_connect(...)) {
    throw new DatabaseException(DatabaseException::ConnectionFailed);
  }
} catch (Exception $e) {
  //Output the standardized error message on failure
  echo $e->getMessage();
}
