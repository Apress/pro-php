function scale($a) {
  return strlen(strstr($a, '.'))-1;
}

function sum($a, $b) {
  if((scale($a) > 3) || (scale($b) > 3)) {
    throw new UnderflowException("Input scale exceeded");
  }
  return $a + $b;
}

echo sum(1,-0.9) . "\n";
echo sum(1,-0.99) . "\n";
echo sum(1,-0.999) . "\n";
echo sum(1,-0.9999) . "\n";