class MyObject {}

$a = new MyObject();
$b = array(spl_object_hash($a)=>'Test');

echo $b[spl_object_hash($a)];