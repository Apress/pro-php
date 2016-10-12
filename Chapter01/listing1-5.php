interface ISpeedInfo {
  function getMaximumSpeed();
}

class Car {
  //Any base class methods
}

class FastCar extends Car implements ISpeedInfo {
  function getMaximumSpeed() {
    return 150;
  }
}

class BadCar extends Car{}

$a = new BadCar();
echo $a->getMaximumSpeed();