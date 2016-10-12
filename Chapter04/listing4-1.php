function connectToDatabase() {

  if(!$conn = pg_connect(...)) {
    throw new Exception("Could not connect to the database");
  }

}

try {

  connectToDatabase();

} catch(Exception $e) {

  echo $e->getMessage();

}
