$arr = array('apple','avocado', 'orange', 'pineapple');
$arrIterator = new ArrayIterator($arr);

$iterator = new RegexIterator($arrIterator, '/^a/');
print_r(iterator_to_array($iterator));