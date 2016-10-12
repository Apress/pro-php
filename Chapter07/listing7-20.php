public static function ParseDocComment($docComment) {

  $returnData = $comments = $tags = array();
  $tagNames = $tagData = array();

  $tokens = docblock_tokenize($docComment,true);

  foreach($tokens as $token) {
    switch( $token[0] ) {

      case DOCBLOCK_INLINETAG:
        $inlineTag = trim($token[1], ' @{}');
        break;

      case DOCBLOCK_ENDINLINETAG:
        switch($inlineTag) {
          case 'link':
            $inlineTagContents = preg_split("/[\s\t]+/", trim($inlineTagData), 2);
            $data = '<a href="'. $inlineTagContents[0];
            $data .= '">'. $inlineTagContents[1] .'</a>';
          break;
        }

        if(array_key_exists($tagId, $tagData)) {
          $tagData[$tagId] .= ' ' . $data;
        } else {
          $tagData[$tagId] = $data;
        }

        unset($inlineTag, $inlineTagData, $inlineTagContents);
        break;

      case DOCBLOCK_INLINETAGCONTENTS:
        $addData = trim($token[1], ' }');
        if(isset($inlineTagData)) {
          $inlineTagData .= ' ' . $addData;
        } else {
          $inlineTagData = $addData;
        }

        unset($addData);
        break;

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