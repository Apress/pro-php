class DemoSubject implements SplSubject {

  private $observers, $value;

  public function __construct() {
    $this->observers = new SplObjectStorage();
  }

  public function attach(SplObserver $observer) {
    $this->observers->attach($observer);
  }

  public function detach(SplObserver $observer) {
    $this->observers->detach($observer);
  }

  public function notify() {
    foreach($this->observers as $observer) {
      $observer->update($this);
    }
  }

  public function setValue($value) {
    $this->value = $value;
    $this->notify();
  }

  public function getValue() {
    return $this->value;
  }

}

class DemoObserver implements SplObserver {

  public function update(SplSubject $subject) {
    echo 'The new value is '. $subject->getValue();
  }

}

$subject = new DemoSubject();
$observer = new DemoObserver();
$subject->attach($observer);
$subject->setValue(5);