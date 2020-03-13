<?php
 
namespace Excellence\Test\Model;
 
class Product
    {
        public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
            {
                return "ExcellenceTestAnkit " . $result;
            }
    }
    
?>  