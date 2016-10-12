$it = new SplFileObject('pm.csv');

foreach($it as $line) {
        echo $line;
}