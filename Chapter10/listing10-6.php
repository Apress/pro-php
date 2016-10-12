class GreaterThanThreeFilterIterator extends FilterIterator {
  public function accept() {
    return ($this->current() > 3);
  }
}
$arr = new ArrayIterator(array(1,2,3,4,5,6));

$iterator = new GreaterThanThreeFilterIterator($arr);
print_r(iterator_to_array($iterator));