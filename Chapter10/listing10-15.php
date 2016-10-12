require_once('/path/to/php-src/ext/spl/examples/dualiterator.inc');

$arrayIterator1 = new ArrayIterator(array(true, false, true));
$arrayIterator2 = new ArrayIterator(array(1, 0, true));

$it = new DualIterator($arrayIterator1, $arrayIterator2);

foreach($it as $unused) {
        echo "Left: ". (($it->getLHS()->current())?'true':'false');
        echo " Right: ". (($it->getRHS()->current())?'true':'false');
        echo " Equal: ". (($it->areEqual())?'true':'false');
        echo " Identical: ". (($it->areIdentical())?'true':'false');
        echo "\n";
}

echo "\nIterators Equal:";
var_dump(DualIterator::compareIterators($arrayIterator1, $arrayIterator2, false));
echo "\nIterators Identical:";
var_dump(DualIterator::compareIterators($arrayIterator1, $arrayIterator2, true));