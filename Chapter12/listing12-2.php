$myArray = new ArrayObject();
$myArray['first'] = 'test';
$demo = $myArray['first'];
unset($myArray['first']);
$numElements = count($myArray);
foreach($myArray as $key=>$value) {}