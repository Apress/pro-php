<html>
  <body>
    <?php
      //Check if a menu placeholder exists
      if($this->placeholder('Zend_Layout')->offsetExists('menu')) {
        //Output the placeholders menu key content
        echo $this->placeholder('Zend_Layout')->menu;
      }
    ?>
    <?php echo $this->placeholder('Zend_Layout')->content; ?>
  </body>
</html>