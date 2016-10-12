<?php if(isset($this->messages)) { ?>
  <?php foreach($this->messages as $message) { ?>
    <?php echo $message; ?><br />
  <?php } ?>
<?php } ?>