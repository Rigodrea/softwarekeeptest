<?php 

class SoftwareKeep_HomePopUp_Block_Popup extends Mage_Core_Block_Template 
{
    private $storeId = null;

    public function __construct() 
    {
        $this->storeId = Mage::app()->getStore()->getStoreId();
    }

    public function getTitle() 
    {
        return Mage::getStoreConfig('homepopup_tab/general/popup_title', $storeId);
    }

    public function getMessage() 
    {
        $msg = Mage::getStoreConfig('homepopup_tab/general/popup_msg', $storeId);

        if ($msg) {
            $lines = explode("\n", $msg);
            return "<span>".implode("</span><span>", $lines)."</span>";            
        }

        return false;
    }

    public function canShowPopUp() 
    {
        if (!$this->storeId)  {
            return false;
        }

        if (Mage::getStoreConfig('homepopup_tab/general/popup_enabled') == 0) {
            return false;
        }

        return true;        
    }
}