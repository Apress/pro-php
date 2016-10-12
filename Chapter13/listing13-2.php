$logfile = 'log.txt';

try {
  throw new LogicException("Demo");
} catch (LogicException $le) {
  $file = new SplFileObject($logfile,'a+');
  $file->fwrite($le->__toString());
}