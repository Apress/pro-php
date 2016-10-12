class MyObject {

  static function myMethod() {
    static::myOtherMethod();
  }

  static function myOtherMethod() {
    echo 'Called from MyObject';
  }

}

class MyExtendedObject extends MyObject {

  static function myOtherMethod() {
    echo 'Called from MyExtendedObject';
  }

}

MyExtendedObject::myMethod();