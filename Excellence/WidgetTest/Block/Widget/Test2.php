<?php


namespace Excellence\WidgetTest\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Block\Product\ListProduct;

use Magento\Framework\Pricing\Render;

use Magento\Framework\View\Element\Template\Context;



class Test2 extends Template implements BlockInterface
{

    
    protected $_productCollectionFactory;
        
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,      
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,        
        array $data = []
    )
    {    
        $this->_productCollectionFactory = $productCollectionFactory;    
        parent::__construct($context, $data);
    }
    
    public function getProductCollection($productId)
    {
       $product = explode(',', $productId);
     
      
          

            $collection = $this->_productCollectionFactory->create()->addFieldToFilter('entity_id', array(
                'in' => $product));

            return $collection;
        
    }
       



   

   


    protected $_template = "widget/test2.phtml";

}
 
