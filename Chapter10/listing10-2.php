$arr = array('a','b','c');
$iterator = new ArrayIterator($arr);
foreach($iterator as $val) {
  echo $val;
}