require_once('/path/to/php-src/ext/spl/examples/searchiterator.inc');

class InFileSearch extends SearchIterator {

  protected $search;

  public function __construct($it, $search) {
    parent::__construct($it);
    $this->search = $search;
  }

  //If the substring is found then accept
  public function accept() {
    return (strpos($this->current(), $this->search) !== FALSE);
  }
}

class FileContentFilter extends FilterIterator {

  protected $search;

  public function __construct($it, $search) {
    parent::__construct($it);
    $this->search = $search;
  }

  public function accept() {
    //Current holds a file name
    $fo = new SplFileObject($this->current());

    //Search within the file
    $file = new InFileSearch($fo, $this->search);

    //Accept if more than one line was found
    return (count(iterator_to_array($file)) > 0);
  }
}

//Create a recursive iterator for Directory Structure
$dir = new RecursiveDirectoryIterator('/path/to/php-src/ext/spl/examples/');

//Flatten the recursive iterator
$it = new RecursiveIteratorIterator($dir);

//Filter
$filter = new FileContentFilter($it, 'Kevin McArthur');

print_r(iterator_to_array($filter));