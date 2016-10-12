class a {}
$instance = new a();
$reference = $instance;
echo spl_object_hash($instance) . "\n";
echo spl_object_hash($reference) . "\n";