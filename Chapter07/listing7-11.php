/**
 * This is a doccomment comment
 *
 * This doccomment documents the class demo
 *
 * @author Kevin McArthur
 * @example This is a multiline example
 * and this is more than valid
 * @example This is another separate example.
 */
class demo {}

$reflectionClass = new ReflectionClass('demo');
$docComment = $reflectionClass->getDocComment();

$tokens = docblock_tokenize($docComment,true);

$comments = array();
$tags = array();
$tagdata = array();

foreach($tokens as $token) {
  //Switch on the token's code
  switch( $token[0] ) {
    case DOCBLOCK_TEXT: //Equiv to case 36:
      //If there is no tag found yet, text is a comment
      if(!isset($tagid)) {
        $comments[] = $token[1];
      } else {
        //If the tag already has data append to it.
        if(array_key_exists($tagid, $tagdata)) {
          //Pad the data with a space and concat
          $tagdata[$tagid] .= ' ' . trim($token[1]);
        } else {
          //If the tag doesn't exist, create it for the first time.
          $tagdata[$tagid] = trim($token[1]);
        }
      }
      break;
    case DOCBLOCK_TAG:
      //Assign a unique id to this tag.
      $tagid = uniqid();
      //Remember the mapping of unique id to tag name.
      $tags[$tagid] = trim($token[1], '@ ');
  }
}

//Join the array with unique id with the tag names
$compiled = array();
foreach($tagdata as $tagid => $data) {
  $tagName = $tags[$tagid];
  /*
    Create arrays where there are multiple tags
    of the same name.
  */
  if(array_key_exists($tagName, $compiled)) {
    if(!is_array($compiled[$tagName])) {
      $oldData = $compiled[$tagName];
      $compiled[$tagName] = array();
      $compiled[$tagName][] = $oldData;
    }
    $compiled[$tagName][] = $data;
  } else {
    $compiled[$tagName] = $data;
  }
}
print_r($comments);
print_r($compiled);