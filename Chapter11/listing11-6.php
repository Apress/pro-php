require_once('/path/to/php-src/ext/spl/examples/recursivetreeiterator.inc');

$pathName = '/path/to/php-src/ext/spl/examples';

$iterator = new RecursiveDirectoryIterator($pathName);
$treeIterator = new RecursiveTreeIterator($iterator);

foreach($treeIterator as $entry) {
        echo $entry . "\n";
}