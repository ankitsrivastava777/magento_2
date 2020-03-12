<?php
namespace Excellence\Slider\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Widget\Block\BlockInterface;
use Excellence\Slider\Model\SlidesFactory; 

class SliderWidget extends Template implements BlockInterface
{
    protected $_sliderdata;
    protected $_scopeConfigObject;
    protected $_template = "widget/slider-widget.phtml";

    public function __construct(
        Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigObject,
        SlidesFactory $sliderCollections
    ) {
        $this->_sliderCollections = $sliderCollections;
        $this->_scopeConfigObject = $scopeConfigObject;
        parent::__construct($context);
    }
    public function getSliderDetails($sliderLogCollections){   
       $sliderInfo = $this->_sliderCollections->create()->getCollection()->addFieldToFilter('slider_name', array('eq' => $sliderLogCollections));
       return $sliderInfo;
    }
    public function getSliderType(){
        if(!($this->_scopeConfigObject->getValue('slider/slider/enable'))){
            return;
        }
        $sliderType = $this->_scopeConfigObject->getValue('slider/slider/select_slider');
        return $sliderType;
    }
}