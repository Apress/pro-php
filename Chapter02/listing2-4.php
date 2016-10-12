class MyObject {

  function myMethod() {
    //Standard functionality
    echo "Standard Functionality\n";
  }

}

class MyOtherObject extends MyObject{
  function myMethod() {
    //Add some new functionality
    echo "New Functionality\n";

    //Then call the original myMethod that is defined in MyObject
    parent::myMethod();
  }
}

$obj = new MyOtherObject();
$obj->myMethod();