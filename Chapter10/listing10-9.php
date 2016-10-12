$arr = array(0=>'A', 1=>'B', 2=>'C', 3=>'D', 'nonnumeric'=>'useless');
$arrIterator = new ArrayIterator($arr);

$iterator = new RegexIterator(
                  $arrIterator,
                  '/^\d*$/',
                  RegexIterator::MATCH,
                  RegexIterator::USE_KEY
            );
print_r(iterator_to_array($iterator));