require_once('path/to/php-src/ext/spl/examples/dbareader.inc');
$it = new DbaReader('test.ini', 'inifile');
print_r(iterator_to_array($it,true));