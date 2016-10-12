public function getCartTotal() {
  for(
    $i=$sum=0, $cnt = count($this);
    $i<$cnt;
    $sum += $this[$i++]->getPrice()
  );
  return $sum;
}