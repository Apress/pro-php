function demonstration() {
  try {
    //Some code that throws exceptions
  } catch (Exception $e) {
    if($e->getCode() == 123) {
      //Do something special for error code 123
    } else {
      throw $e;
    }
  }
}