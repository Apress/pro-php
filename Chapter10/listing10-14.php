$arr = array(
         0 => 'a';
         1 => array('a','b','c'),
         2 => 'b',
         3 => array('a','b','c'),
         4 => 'c'
);

$arrayIterator = new RecursiveArrayIterator($arr);

$it = new ParentIterator($arrayIterator);

print_r(iterator_to_array($it, false));