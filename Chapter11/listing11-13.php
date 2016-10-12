$it = new SplFileObject('pm.csv');

while($array = $it->fgetcsv()) {
  var_export($array);
}