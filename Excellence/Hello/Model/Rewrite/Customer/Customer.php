<?php
    namespace Excellence\Hello\Model\Rewrite\Customer;
  
    class Customer extends \Magento\Customer\Model\Customer
    {
        public function loadByEmail($customerEmail)
        {
 
            
             return parent::loadByEmail($customerEmail);
        }
  
    }