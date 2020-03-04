<?php

namespace Excellence\Payment\Model\Config\Source\Order\Status;


class Pendingpayment implements \Magento\Framework\Option\ArrayInterface
{
  
    public function toOptionArray()
        {
            return [['value' => 1, 'label' => __('Pending')], ['value' => 0, 'label' => __('Approved')]];
        }

  
    public function toArray()
        {
            return [0 => __('Approved'), 1 => __('Pending')];
        }
}
