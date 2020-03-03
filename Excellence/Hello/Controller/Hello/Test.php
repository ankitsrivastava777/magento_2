<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Excellence\Hello\Controller\Hello;

/**
 * Logout controller
 *
 * @method \Magento\Framework\App\RequestInterface getRequest()
 * @method \Magento\Framework\App\Response\Http getResponse()
 */
class Test extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Customer logout action
     *
     * @return \Magento\Framework\Controller\Result\Json
     */
    public function execute()
    {
        echo "hello test";
    }
}
