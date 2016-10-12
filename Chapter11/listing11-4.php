$pathName = '/path/to/iterate/';

foreach(new DirectoryIterator($pathName) as $fileInfo) {
  echo $fileInfo . "\n";
}