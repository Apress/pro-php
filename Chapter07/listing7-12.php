class DocumentingReflection extends Reflection {

  public static function ParseDocComment($docComment) {

    $returnData = $comments = $tags = array();
    $tagNames = $tagData = array();

    $tokens = docblock_tokenize($docComment,true);
    foreach($tokens as $token) {

      switch( $token[0] ) {

        case DOCBLOCK_TEXT:

          if(!isset($tagId)) {
            $comments[] = $token[1];
          } else {
            if(array_key_exists($tagId, $tagData)) {
              $tagData[$tagId] .= ' ' . trim($token[1]);
            } else {
              $tagData[$tagId] = trim($token[1]);
            }
          }
          break;

        case DOCBLOCK_TAG:

          $tagId = uniqid();
          $tagNames[$tagId] = trim($token[1], '@ ');
          break;

      }
    }

    foreach($tagData as $tagId => $data) {

      $tagName = $tagNames[$tagId];
      if(array_key_exists($tagName, $tags)) {
        if(!is_array($tags[$tagName])) {
          $backupData = $tags[$tagName];
          $tags[$tagName] = array();
          $tags[$tagName][] = $backupData;
        }
        $tags[$tagName][] = $data;
      } else {
        $tags[$tagName] = $data;
      }

    }

    $returnData['comments'] = $comments;
    $returnData['tags'] = $tags;
    $returnData['tokens'] = $tokens;

    return $returnData;
  }
}