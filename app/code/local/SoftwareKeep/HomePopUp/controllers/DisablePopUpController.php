<?php 

class SoftwareKeep_HomePopUp_DisablePopUpController extends Mage_Core_Controller_Front_Action 
{
    public function indexAction() 
    {
        if ($this->getRequest()->getParam('disable_popup')) {
            Mage::getSingleton('core/cookie')->set('disable_popup', true, 60 * 60 * 24);
        }
    }
}