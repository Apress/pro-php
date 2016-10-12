require_once('path/to/php-src/ext/spl/examples/inigroups.inc');
$it = new IniGroups('test.ini', 'inifile');
print_r(iterator_to_array($it,true));