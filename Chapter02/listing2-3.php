class MyObject {

  function myBaseMethod() {
    echo "I am declared in MyObject\n";
  }

}

class MyOtherObject extends MyObject{

  function myExtendedMethod() {
    echo "myExtendedMethod is declared in MyOtherObject\n";
    self::myBaseMethod();
  }

}

MyOtherObject::myExtendedMethod();