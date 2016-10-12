function mathy($x) {
  if ($x < 0) {
    throw new RangeException('$x must be 0 or greater');
  }
}