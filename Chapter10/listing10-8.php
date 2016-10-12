$arr = array('apple','avocado', 'orange', 'pineapple');
$arrIterator = new ArrayIterator($arr);

$iterator = new RegexIterator($arrIterator, '/^(a\w{3})\w*$/', RegexIterator::GET_MATCH);

print_r(iterator_to_array($iterator));
