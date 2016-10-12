class Sensor {
  public static function getTemperature() {
    return 51;
  }
}

class Monitor {
  public static function watch() {
    $temp = Sensor::getTemperature();
    if(($temp < -50) || ($temp > 50)) {
      throw new RangeException('The sensor broke down.');
    }
  }
}

Monitor::watch();