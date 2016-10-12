function purchase() {
  //Begin transaction and acquire lock

  //Check funds again to prevent race condition
  if(checkSufficientFunds()) {
    //Insert and commit transaction
  } else {
    //Abort transaction
    throw new RuntimeException("The account has insufficient funds.");
  }
}