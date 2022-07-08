<?php

namespace Task6\Rps\Model\ResourceModel\Rps;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Task6\Rps\Model\Rps', 'Task6\Rps\Model\ResourceModel\Rps');
    }
}
