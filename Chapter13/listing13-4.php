function mathy($x) {
  if($x==2) {
    throw new DomainException("X cannot be 2");
  }
  return (1 / ($x - 2));
}