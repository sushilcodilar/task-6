<?php
namespace Task6\Rps\Model\ResourceModel;

class Rps extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init('rps', 'entity_id');
    }
}
