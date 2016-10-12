function connectToDatabase() {

  if(!$conn = pg_connect(...)) {
    throw new DatabaseException("Friendly Message");
  }

}

try {

  connectToDatabase();

} catch(DatabaseException $e) {
  echo $e->getMessage() . "\n";
  echo $e->getDatabaseErrorMessage();

}
