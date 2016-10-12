function printmax10($str) {
  if(strlen($str) > 10) {
    throw new LengthException("Input was too long");
  }
  echo $str;
}

printmax10('asdf');
printmax10('abcdefghijk');