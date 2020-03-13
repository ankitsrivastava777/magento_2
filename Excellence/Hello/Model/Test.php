<?php
namespace Excellence\Hello\Model;

class Test extends \Magento\Framework\Model\AbstractModel implements
    \Excellence\Hello\Api\Data\TestInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'excellence_hello_test';

  
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Excellence\Hello\Model\ResourceModel\Test::class);
    }

    
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function loadByTitle($title){
        if(!$title){
            $title = $this->getTitle();
            //random data logic. can be much more complex.
            //this is just example
        }
        $id = $this->getResource()->loadByTitle($title);
        return $this->load($id);
    }
}
