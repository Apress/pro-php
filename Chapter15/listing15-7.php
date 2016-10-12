<?php
class CustomersController extends Zend_Controller_Action {
  public function indexAction() {
    $table = new Customers();
    $this->view->customers = $table->fetchAll();
  }
}