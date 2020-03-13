<?php

namespace Excellence\Hello\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context)
    {
      
        return parent::__construct($context);
    }
    
    // public function execute()
    // {
    //      $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
    //      $resultRedirect->setUrl($this->_redirect->getRefererUrl());
    //      return $resultRedirect;
    // }

    public function execute()
    {
         $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
         // Your code
         $resultRedirect->setPath('excellence/index/add');
         return $resultRedirect;
    }
}
