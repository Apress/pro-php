function testing() {
  static $a = 1;
  $a *= 2;
  echo $a . "\n";
}

testing();
testing();
testing();