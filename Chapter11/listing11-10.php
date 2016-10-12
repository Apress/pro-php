$dir = '/path/to/plugins';
$dirit = new DirectoryIterator($dir);

foreach($dirit as $file) {
  if(!$file->isDir()) { //Ignore directories, e.g., ./ and ../
    require_once($file);
  }
}