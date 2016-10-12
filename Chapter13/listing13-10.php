function sumThenInsertDemo($a, $b) {

  $sum = $a + $b;

  if ($sum >= 10) {
    throw new OverflowException("$a + $b will overflow storage");
  }

  $link = pg_connect(...);
  pg_query($link, 'insert into test values ('. $sum .')');

}
