class FileExtensionFinder extends FilterIterator {

  protected $predicate, $path;

  public function __construct($path, $predicate) {
    $this->predicate = $predicate;
    $this->path = $path;

    $it = new RecursiveDirectoryIterator($path);
    $flatIterator = new RecursiveIteratorIterator($it);

    parent::__construct($flatIterator);

  }

  public function accept() {
    $pathInfo = pathinfo($this->current());
    $extension = $pathInfo['extension'];
    return ($extension == $this->predicate);
  }

}

$it = new FileExtensionFinder('/path/to/search/','php');

foreach($it as $entry) {
  echo $entry . "\n";
}