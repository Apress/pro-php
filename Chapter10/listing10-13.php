require_once('/path/to/php-src/ext/spl/examples/recursivetreeiterator.inc');

$arr = array(
         0 => 'a';
         1 => array('a','b','c'),
         2 => 'b',
         3 => array('a','b','c'),
         4 => 'c'
);

$arrayIterator = new RecursiveArrayIterator($arr);

$it = new RecursiveTreeIterator($arrayIterator);

print_r(iterator_to_array($it, false));