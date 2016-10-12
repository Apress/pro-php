$arr = array(1,2,3,4,5,6,7,8,9);
$arrIterator = new ArrayIterator($arr);
$limitIterator = new LimitIterator($arrIterator, 3, 4);
foreach($limitIterator as $number) {
  echo $number;
}