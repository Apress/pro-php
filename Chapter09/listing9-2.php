function print_entry($iterator) {
  print( $iterator->current() );
  return true;
}

$array = array(1,2,3);
$iterator = new ArrayIterator($array);
iterator_apply($iterator, 'print_entry', array($iterator));