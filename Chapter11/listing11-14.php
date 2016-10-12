class CSVFileObject extends SPLFileInfo implements Iterator, SeekableIterator {

  protected $map, $fp, $currentLine;

  public function __construct( $filename,
                               $mode = 'r',
                               $use_include_path = false,
                               $context = NULL
                             )
{

    parent::__construct($filename);

    //Cannot pass an implicit null to fopen
    if(isset($context)) {
      $this->fp = fopen( $filename,
                         $mode,
                         $use_include_path,
                         $context
                       );
    } else {
      $this->fp = fopen($filename, $mode, $use_include_path);
    }

    if(!$this->fp) {
      throw new Exception("Cannot read file");
    }

    //Get the column map
    $this->map = $this->fgetcsv();
    $this->currentLine = 0;
  }

  function fgetcsv($delimiter = ',', $enclosure = '"') {
    return fgetcsv($this->fp, 0, $delimiter, $enclosure);
  }

  function key() {
    return $this->currentLine;
  }

  function current() {
    /*
     * The fgetcsv method increments the file pointer
     * so you must first record the file pointer,
     * get the data, and return the file pointer.
     * Only the next() method should increment the
     * pointer during operation.
     */
    $fpLoc = ftell($this->fp);
    $data = $this->fgetcsv();
    fseek($this->fp, $fpLoc);
    return array_combine($this->map, $data);
  }

  function valid() {
    //Check for end-of-file
    if(feof($this->fp)) {
      return false;
    }

    /*
     * Again, need to prevent the file pointer
     * from being advanced. This check prevents
     * a blank line at the end of file returning
     * as a null value.
     */
    $fpLoc = ftell($this->fp);
    $data = $this->fgetcsv();
    fseek($this->fp, $fpLoc);
    return (is_array($data));
  }

  function next() {
    $this->currentLine++;
    //Bump the file pointer to the next line
    fgets($this->fp);
  }

  function rewind() {
    $this->currentLine = 0;

    //Reset the file pointer
    fseek($this->fp, 0);

    //Skip the column headers
    fgets($this->fp);
  }

  function seek($line) {
    $this->rewind();
    while($this->currentLine < $line && !$this->eof()) {
      $this->currentLine++;
      fgets($this->fp);
    }
  }

}