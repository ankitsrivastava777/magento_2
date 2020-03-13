<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Excellence\Payment\Model\Config\Source\Order\Status;

/**
 * @api
 * @since 100.0.2
 */
class Pendingpayment implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 1, 'label' => __('Pending')], ['value' => 0, 'label' => __('Approved')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [0 => __('Approved'), 1 => __('Pending')];
    }
}
