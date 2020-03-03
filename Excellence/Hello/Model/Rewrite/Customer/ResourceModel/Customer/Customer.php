<?php
     
    namespace Excellence\Hello\Model\Rewrite\Customer\ResourceModel\Customer;
  
    class Customer extends \Magento\Customer\Model\ResourceModel\Customer
    {
        public function loadByEmail(\Magento\Customer\Model\Customer $customer, $email)
        {
             
            parent::loadByEmail($customer,$email);
        }
  
    }   