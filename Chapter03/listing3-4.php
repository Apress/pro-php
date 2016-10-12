class MyObject {
  //Your object that will be returned from the factory
}

class MyFactory {
  public static function factory() {
    //Return a new instance of your object
    return new MyObject();
  }

}

$instance = MyFactory::factory();