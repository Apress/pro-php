$arrFirst = new ArrayIterator(array(1,2,3));
$arrSecond = new ArrayIterator(array(4,5,6));

$iterator = new AppendIterator();
$iterator->append(new LimitIterator($arrFirst, 0, 2));
$iterator->append(new LimitIterator($arrSecond, 0, 2));
print_r(iterator_to_array($iterator, false));