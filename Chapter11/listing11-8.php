require_once('/path/to/php-src/ext/spl/examples/findfile.inc');
require_once('/path/to/php-src/ext/spl/examples/regexfindfile.inc');

$it = new RegexFindFile('/path/to/php-src/ext/spl/examples/', '/tree/');
print_r(iterator_to_array($it));