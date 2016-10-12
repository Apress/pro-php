<?php
  $this->placeholder('Zend_Layout')
       ->captureStart('APPEND', 'menu');
?>
<li><a href="...">New Menu Item</a></li>
<?php $this->placeholder('Zend_Layout')->captureEnd(); ?>