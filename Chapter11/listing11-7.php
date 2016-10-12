require_once('/path/to/php-src/ext/spl/examples/findfile.inc');

$it = new FindFile('/path/to/php-src/', 'tree.php');

foreach($it as $entry) {
        echo $entry . "\n";
}