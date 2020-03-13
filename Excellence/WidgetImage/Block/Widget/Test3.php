<?php


namespace Excellence\WidgetImage\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Block\Product\ListProduct;

use Magento\Framework\Pricing\Render;

use Magento\Framework\View\Element\Template\Context;



class Test3 extends Template implements BlockInterface
{

    protected $_template = "widget/test3.phtml";
    protected $_productloader;
    protected $_storeManager;
  
public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Magento\Catalog\Model\ProductFactory $_productloader,
                \Magento\Store\Model\StoreManagerInterface $storemanager
 ) {    
            parent::__construct($context);
            $this->_productloader = $_productloader;
            $this->_storeManager =  $storemanager;
      }
      
 Public function getProductImageUsingCode($productId)
 {
     
    $store = $this->_storeManager->getStore();
    // $productId = 2;
    $product = $this->_productloader->create()->load($productId);   
    
    $productImageUrl = $store->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . 'catalog/product' .$product->getImage();
    $productUrl = $product->getImage();
    $productUrl = $product->getImage();
    return $productImageUrl;
    
 
 }



   

   


   

}
 
