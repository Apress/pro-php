function exceptionLogger($exception) {
  $file = 'var/log/exceptionLog.log';
  file_put_contents($file, $exception->__toString(), FILE_APPEND);
}

set_exception_handler('exceptionLogger');