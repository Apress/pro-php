$it = new SimpleXMLIterator(file_get_contents('test.xml'));

foreach($it as $key=>$node) {
  echo $key . "\n";
  if($it->hasChildren()) {
    foreach($it->getChildren() as $element=>$value) {
      echo "\t". $element . ":" . $value ."\n";
    }
  }
}