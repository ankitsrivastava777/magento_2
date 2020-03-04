<?php
namespace Excellence\Hello\Model\ResourceModel;

/**
 * Class Test
 */
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('excellence_hello_test', 'test_id');
    }

    public function loadByTitle($title){
        $table = $this->getMainTable();
        $where = $this->getConnection()->quoteInto("title = ?", $title);
        $sql = $this->getConnection()->select()->from($table,array('test_id'))->where($where);
        $id = $this->getConnection()->fetchOne($sql);
        return $id;
    }
}
