class firstException extends Exception {}
class secondException extends Exception {}

try {
  //Code that throws exceptions
} catch (firstException $e) {
  //What to do when firstException is thrown
} catch (secondException $e) {
  //What to do when secondException is thrown
} catch (Exception $e) {
  //What to do for all other exceptions
}