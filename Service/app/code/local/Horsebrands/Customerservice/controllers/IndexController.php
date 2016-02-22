<?php

class Horsebrands_Customerservice_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
      // die('funktioniert.');
      $this->loadLayout();
      // $this->_initLayoutMessages('customer/session');
      // $this->_initLayoutMessages('catalog/session');

      // $this->getLayout()->getBlock('content')->append(
      //     $this->getLayout()->createBlock('customerservice/contact')
      // );
      $this->getLayout()->getBlock('head')->setTitle($this->__('Customer Service'));
      $this->renderLayout();
    }
}
