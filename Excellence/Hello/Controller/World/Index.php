<?php

namespace Excellence\Hello\Controller\World;

class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context)
    {
      
        return parent::__construct($context);
    }
    
    public function execute()
    {
        echo 'Hello World controller name';
        exit;
    } 
}
