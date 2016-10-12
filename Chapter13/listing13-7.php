function sum($a, $b) {
  if(!is_numeric($a) || !is_numeric($b)) {
    throw new InvalidArgumentException("Invalid Argument");
  }
  return ($a+$b);
}

echo sum(1,2);
echo sum('a','b');