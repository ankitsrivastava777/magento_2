<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Rh\Blog\Model;

class Blog extends \Magento\Framework\Model\AbstractModel {

	protected function _construct() {
		$this->_init('Rh\Blog\Model\ResourceModel\Blog');
	}
}