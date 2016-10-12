$arrFirst = new ArrayIterator(array(1,2,3));
$arrSecond = new ArrayIterator(array(4,5,6));

$iterator = new AppendIterator();
$iterator->append($arrFirst);
$iterator->append($arrSecond);

foreach($iterator as $number) {
  echo $number;
}