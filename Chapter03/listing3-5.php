interface IImage {

  function getHeight();
  function getWidth();
  function getData();

}

class Image_PNG implements IImage {

  private $_width, $_height, $_data;

  public function __construct($file) {
    $this->_file = $file;
    $this->_parse();
  }

  private function _parse() {
    //Complete PNG specific parsing
    //and populate $_width, $_height and $_data
  }

  public function getWidth() {
    return $this->_width;
  }

  public function getHeight() {
    return $this->_height;
  }

  public function getData() {
    return $this->_data;
  }

}

class Image_JPEG implements IImage {

  private $_width, $_height, $_data;

  public function __construct($file) {
    $this->_file = $file;
    $this->_parse();
  }

  private function _parse() {
    //Complete JPEG specific parsing
    //and populate $_width, $_height and $_data
  }

  public function getWidth() {
    return $this->_width;
  }

  public function getHeight() {
    return $this->_height;
  }

  public function getData() {
    return $this->_data;
  }

}

class ImageFactory {

  public static function factory($file) {
    $pathParts = pathinfo($file);
    switch(strtolower($pathParts['extension'])) {
      case 'jpg':
        $ret = new Image_JPEG($file);
        break;
      case 'png';
        $ret = new Image_PNG($file);
        break;
      default:
        //Problem
    }
    if($ret instanceof IImage) {
      return $ret;
    } else {
      //Problem
    }
  }

}